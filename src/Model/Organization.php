<?php


namespace Jmy\Esign\Model;


class Organization
{
    /**
     * @var $orgId string
     */
    private $orgId;

    /**
     * @var $thirdPartyUserId string | null
     */
    private $thirdPartyUserId;

    /**
     * @var $creator string | null
     */
    private $creator;

    /**
     * @var $name string | null
     */
    private $name;

    /**
     * @var $idType string | null
     */
    private $idType;

    /**
     * @var $idNumber string | null
     */
    private $idNumber;

    /**
     * @var $orgLegalIdNumber string | null
     */
    private $orgLegalIdNumber;

    /**
     * @var $orgLegalName string | null
     */
    private $orgLegalName;

    /**
     * @return string
     */
    public function getOrgId(): string
    {
        return $this->orgId;
    }

    /**
     * @param string $orgId
     * @return Organization
     */
    public function setOrgId(string $orgId): Organization
    {
        $this->orgId = $orgId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThirdPartyUserId(): ?string
    {
        return $this->thirdPartyUserId;
    }

    /**
     * @param string|null $thirdPartyUserId
     * @return Organization
     */
    public function setThirdPartyUserId(?string $thirdPartyUserId): Organization
    {
        $this->thirdPartyUserId = $thirdPartyUserId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }

    /**
     * @param string|null $creator
     * @return Organization
     */
    public function setCreator(?string $creator): Organization
    {
        $this->creator = $creator;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Organization
     */
    public function setName(?string $name): Organization
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdType(): ?string
    {
        return $this->idType;
    }

    /**
     * @param string|null $idType
     * @return Organization
     */
    public function setIdType(?string $idType): Organization
    {
        $this->idType = $idType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdNumber(): ?string
    {
        return $this->idNumber;
    }

    /**
     * @param string|null $idNumber
     * @return Organization
     */
    public function setIdNumber(?string $idNumber): Organization
    {
        $this->idNumber = $idNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrgLegalIdNumber(): ?string
    {
        return $this->orgLegalIdNumber;
    }

    /**
     * @param string|null $orgLegalIdNumber
     * @return Organization
     */
    public function setOrgLegalIdNumber(?string $orgLegalIdNumber): Organization
    {
        $this->orgLegalIdNumber = $orgLegalIdNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrgLegalName(): ?string
    {
        return $this->orgLegalName;
    }

    /**
     * @param string|null $orgLegalName
     * @return Organization
     */
    public function setOrgLegalName(?string $orgLegalName): Organization
    {
        $this->orgLegalName = $orgLegalName;
        return $this;
    }

}