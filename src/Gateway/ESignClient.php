<?php

namespace Jmy\Esign\Gateway;

use Jmy\Esign\Exception\ESignException;
use Jmy\Esign\Model\AccessToken;
use Jmy\Esign\Model\Account;
use Jmy\Esign\Model\FlowFinishNotice;
use Jmy\Esign\Model\FlowUpdateNotice;
use Jmy\Esign\Request\AccountRequest;
use Jmy\Esign\Request\AccountSealRequest;
use Jmy\Esign\Model\DocTemplate;
use Jmy\Esign\Model\TemplateDoc;
use Jmy\Esign\Request\DocTemplateRequest;
use Jmy\Esign\Model\Organization;
use Jmy\Esign\Request\FlowRequest;
use Jmy\Esign\Request\OrganizationRequest;
use Jmy\Esign\Request\OrganizationSealRequest;
use Jmy\Esign\Model\Response;
use Jmy\Esign\Model\SealId;
use Jmy\Esign\Model\SignFile;
use Jmy\Esign\Model\TemplateComponent;
use Jmy\Esign\Model\TokenQuery;
use Jmy\Esign\Request\SignFileRequest;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class ESignClient
 * @package Jmy\Esign\Gateway
 * @see https://qianxiaoxia.yuque.com/books/share/3d2b1b90-6e3f-4647-b86b-1480f724a6d5/om5lm2
 */
class ESignClient
{


    private $client;

    private $appId;

    private $cache;

    private $secret;

    private $serializer;

    private $ttl;

    private $key;

    private $logger;

    private $retryTimes;

    public function __construct(string $gateway, string $appId, string $secret, CacheInterface $cache, LoggerInterface $logger, $ttl = 0.6, string $key = 'esigntoken', int $retryTimes = 3)
    {
        $this->client = new Client([
            'base_uri' => $gateway,
            'timeout' => 30
        ]);
        $this->appId = $appId;
        $this->secret = $secret;
        $this->serializer = new Serializer(
            [
                new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), null, new ReflectionExtractor()),
                new GetSetMethodNormalizer(),
                new ArrayDenormalizer()
            ]
            ,
            [new JsonEncoder()]
        );
        $this->cache = $cache;
        $this->key = $key;
        $this->ttl = $ttl;
        $this->retryTimes = $retryTimes;
        $this->logger = $logger;
    }

    /**
     * @param AccountRequest $request
     * @return Account
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function createPersonalAccount(AccountRequest $request)
    {
        $response = $this->request('post', '/v1/accounts/createByThirdPartyUserId', [
            'json' => $request
        ]);
        return $this->serializer->denormalize($response, Account::class);
    }

    /**
     * @param string $accountId
     * @return Account
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function findPersonalAccount(string $accountId)
    {
        $res = $this->request('get', sprintf("/v1/accounts/%s", $accountId));
        return $this->serializer->denormalize($res, Account::class);
    }

    /**
     * @param OrganizationRequest $request
     * @return Organization
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function createOrganization(OrganizationRequest $request)
    {
        $res = $this->request('post', '/v1/organizations/createByThirdPartyUserId', [
            'json' => $request
        ]);
        return $this->serializer->denormalize($res, Organization::class);
    }

    /**
     * @param string $orgId
     * @return Organization
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function findOrganization(string $orgId)
    {
        $res = $this->request('get', sprintf("/v1/organizations/%s", $orgId));
        return $this->serializer->denormalize($res, Organization::class);
    }

    public function grantSignAuth(string $accountId, \DateTimeImmutable $immutable = null)
    {
        $response = $this->request('post', sprintf("/v1/signAuth/%s", $accountId), [
            'json' => array_filter([
                'deadline' => $immutable ? $immutable->format('Y-m-d H:i:s') : null
            ])
        ]);
        return $response;
    }

    public function removeSignAuth(string $accountId)
    {
        return $this->request('delete', sprintf("/v1/signAuth/%s", $accountId));
    }

    /**
     * @param AccountSealRequest $request
     * @return SealId
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function createPersonTemplate(AccountSealRequest $request)
    {
        $res = $this->request('post', sprintf("/v1/accounts/%s/seals/personaltemplate", $request->getAccountId()), [
            'json' => $request
        ]);
        return $this->serializer->denormalize($res, SealId::class);
    }

    /**
     * @param OrganizationSealRequest $request
     * @return SealId
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function createOrganizationTemplate(OrganizationSealRequest $request)
    {
        $res = $this->request('post', sprintf("/v1/organizations/%s/seals/officialtemplate", $request->getOrgId()), [
            'json' => $request->jsonSerialize()
        ]);
        return $this->serializer->denormalize($res, SealId::class);
    }

    /**
     * @param DocTemplateRequest $request
     * @return DocTemplate
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function createDocTemplate(DocTemplateRequest $request)
    {
        $res = $this->request('post', '/v1/docTemplates/createByUploadUrl', [
            'json' => $request
        ]);
        /**
         * @var $doc DocTemplate
         */
        $doc = $this->serializer->denormalize($res, DocTemplate::class);
        $this->uploadFile($request, $doc);
        return $doc;
    }

    public function uploadFile(DocTemplateRequest $request, DocTemplate $template) {

        try {
            $response = $this->client->request('PUT', $template->getUploadUrl() ,[
                'headers' => [
                    'Content-MD5' => $request->getContentMd5(),
                    'Content-Type' => $request->getContentType()
                ],
                'body' => file_get_contents($request->getFile()->getPathname())
            ]);
            return $response->getStatusCode() === 200;

        }catch (ClientException $exception) {
            $this->logger->error('essin upload file error');
            $this->logger->error($exception->getResponse()->getBody()->getContents());
        }
    }


    public function createFlow(FlowRequest $request) {
        $response = $this->request('post', '/api/v2/signflows/createFlowOneStep', [
            'json' =>  $request
        ]);
        return $response["flowId"];
    }

    /**
     * @param string $flowId
     * @return bool
     * @throws ESignException
     */
    public function startFlow(string $flowId)
    {
        $response = $this->request('put', sprintf("/v1/signflows/%s/start", $flowId));
        return $response === null;
    }

    public function findSignUrl(string $flowId, string $accountId,  string $orgId, string  $appScheme, int $urlType = 0)
    {
        $response = $this->request('get', sprintf("/v1/signflows/%s/executeUrl", $flowId), [
            'query' => [
                'accountId' => $accountId,
                'organizeId' => $orgId,
                'urlType' => $urlType,
                'appScheme' => $appScheme
            ]
        ]);
        return $response;
    }

    public function findFlowUpdateNotice(array $data)
    {
        return $this->serializer->denormalize($data, FlowUpdateNotice::class);
    }


    public function findFlowFinishNotice(array $data)
    {
        return $this->serializer->denormalize($data, FlowFinishNotice::class);
    }

    /**
     * @param TemplateComponent $request
     * @return string
     * @throws ESignException
     */
    public function addComponents(TemplateComponent $request)
    {
        $res = $this->request('post', sprintf("/v1/docTemplates/%s/components", $request->getTemplateId()), [
            'json' => $request
        ]);
        return $res;
    }

    /**
     * @param string $templateId
     * @return TemplateDoc
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function findTemplate(string $templateId)
    {
        $res = $this->request('get', sprintf("/v1/docTemplates/%s", $templateId));
        return $this->serializer->denormalize($res, TemplateDoc::class);
    }

    /**
     * @param SignFileRequest $request
     * @return SignFile
     * @throws ESignException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function createFileByTemplate(SignFileRequest $request)
    {
        $res = $this->request('post', sprintf("/v1/files/createByTemplate"), [
            'json' => $request
        ]);
        return $this->serializer->denormalize($res, SignFile::class);
    }


    /**
     * @param bool $force
     * @return array|bool|object
     * @throws ESignException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function getAccessToken(bool $force = false)
    {
        if ($this->cache->get($this->key) && !$force) {
            return $this->cache->get($this->key);
        }

        $token = $this->doGetAccessToken();
        $this->cache->set($this->key, $token->getToken(), (int) ($this->ttl * 120 * 60));
        return $token->getToken();
    }

    /**
     * @return array|object
     * @throws ESignException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    private function doGetAccessToken()
    {
        $res = $this->client->request('get', '/v1/oauth2/access_token', [
            'query' => (new TokenQuery())
                ->setAppId($this->appId)
                ->setSecret($this->secret)->toArray()
        ]);
        /**
         * @var $response Response
         */
        $response = $this->serializer->deserialize($res->getBody()->getContents(), Response::class, 'json');
        if ($response->getCode() != Response::OK)
            throw new  ESignException($response->getMessage());
        return $this->serializer->denormalize($response->getData(), AccessToken::class);
    }

    public function request(string $method, string $uri, array $options = [])
    {
        return $this->retry(function() use ($method, $uri, $options) {
            $res = $this->client->request($method, $uri, array_merge(
                [
                    'headers' => ['X-Tsign-Open-App-Id' => $this->appId, 'X-Tsign-Open-Token' => $this->getAccessToken(), 'Content-Type' => 'application/json'],
                ], $options
            ));
            $content = $res->getBody()->getContents();
            /**
             * @var $response Response
             */
            $response = $this->serializer->deserialize($content, Response::class, 'json');
            if ($response->getCode() != Response::OK)
                throw new  ESignException($response->getMessage());
            return $response->getData();
        }, $this->retryTimes);

    }

    public function deserialize($data, $class, $format)
    {
        return $this->serializer->deserialize($data, $class, $format);
    }

    public function retry(callable $fn, int $times)
    {
        beginning:
        try {
            return $fn();
        }catch (\Exception $e) {
            $this->logger->error($e->getMessage());
            if (!$times) {
                throw new \Exception('retry reach max times');
            }
            $times--;
            $this->getAccessToken(true);
            goto beginning;
        }
    }



}
