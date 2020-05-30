<?php


namespace Jmy\Esign\Model;

/**
 * Class TokenRequest
 * @package Jmy\Esign\Model
 * @see https://qianxiaoxia.yuque.com/books/share/3d2b1b90-6e3f-4647-b86b-1480f724a6d5/ewg01t
 */
class TokenQuery
{

    const CLIENT_CREDENTIALS = 'client_credentials';
    /**
     * @var $appId string
     */
    private $appId;

    /**
     * @var $secret string
     */
    private $secret;

    /**
     * @var $grantType string
     */
    private $grantType;

    public function __construct()
    {
        $this->grantType =  self::CLIENT_CREDENTIALS;
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return TokenQuery
     */
    public function setAppId(string $appId): TokenQuery
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     * @return TokenQuery
     */
    public function setSecret(string $secret): TokenQuery
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrantType(): string
    {
        return $this->grantType;
    }

    /**
     * @param string $grantType
     * @return TokenQuery
     */
    public function setGrantType(string $grantType): TokenQuery
    {
        $this->grantType = $grantType;
        return $this;
    }


    public function toArray()
    {
        return [
            'appId' => $this->appId,
            'secret' => $this->secret,
            'grantType' => $this->grantType
        ];
    }

}