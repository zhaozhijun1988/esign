<?php


namespace Jmy\Esign\Request;


class OrganizationSealRequest extends SealRequest implements \JsonSerializable
{

    const TYPE_TEMPLATE_ROUND = 'TEMPLATE_ROUND';

    const TYPE_TEMPLATE_OVAL = 'TEMPLATE_OVAL';

    const CENTRAL_STAR = 'STAR';

    const CENTRAL_NONE = 'NONE';

    /**
     * @var $orgId string
     */
    private $orgId;

    /**
     * @var $alias | null
     */
    private $alias;

    /**
     * @var $htext string | null
     */
    private $htext;

    /**
     * @var $qtext string | null
     */
    private $qtext;

    /**
     * @var $type string
     */
    private $type;

    /**
     * @var $central string
     */
    private $central;

    /**
     * @return string
     */
    public function getOrgId(): string
    {
        return $this->orgId;
    }

    /**
     * @param string $orgId
     * @return OrganizationSealRequest
     */
    public function setOrgId(string $orgId): OrganizationSealRequest
    {
        $this->orgId = $orgId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     * @return OrganizationSealRequest
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHtext(): ?string
    {
        return $this->htext;
    }

    /**
     * @param string|null $htext
     * @return OrganizationSealRequest
     */
    public function setHtext(?string $htext): OrganizationSealRequest
    {
        $this->htext = $htext;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQtext(): ?string
    {
        return $this->qtext;
    }

    /**
     * @param string|null $qtext
     * @return OrganizationSealRequest
     */
    public function setQtext(?string $qtext): OrganizationSealRequest
    {
        $this->qtext = $qtext;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return OrganizationSealRequest
     */
    public function setType(string $type): OrganizationSealRequest
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCentral(): string
    {
        return $this->central;
    }

    /**
     * @param string $central
     * @return OrganizationSealRequest
     */
    public function setCentral(string $central): OrganizationSealRequest
    {
        $this->central = $central;
        return $this;
    }

    public function jsonSerialize()
    {
       return array_filter([
           'alias' => $this->alias,
           'color' => $this->getColor(),
           'height' => $this->getHeight(),
           'width' => $this->getWidth(),
           'htext' => $this->getHtext(),
           'qtext' => $this->getQtext(),
           'type' => $this->getType(),
           'central' => $this->getCentral()
       ]);
    }


}