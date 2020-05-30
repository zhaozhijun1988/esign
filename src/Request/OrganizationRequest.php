<?php


namespace Jmy\Esign\Request;


class OrganizationRequest implements \JsonSerializable
{

    const CRED_ORG_USCC = 'CRED_ORG_USCC';

    /**
     * @var $thirdPartyUserId string
     */
    private $thirdPartyUserId;

    /**
     * @var $creator string
     */
    private $creator;

    /**
     * @var $name string
     */
    private $name;

    /**
     * @var $idType string
     */
    private $idType;

    /**
     * @var $idNumber string
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
    public function getThirdPartyUserId(): string
    {
        return $this->thirdPartyUserId;
    }

    /**
     * @param string $thirdPartyUserId
     * @return OrganizationRequest
     */
    public function setThirdPartyUserId(string $thirdPartyUserId): OrganizationRequest
    {
        $this->thirdPartyUserId = $thirdPartyUserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreator(): string
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     * @return OrganizationRequest
     */
    public function setCreator(string $creator): OrganizationRequest
    {
        $this->creator = $creator;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return OrganizationRequest
     */
    public function setName(string $name): OrganizationRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdType(): string
    {
        return $this->idType;
    }

    /**
     * @param string $idType
     * @return OrganizationRequest
     */
    public function setIdType(string $idType): OrganizationRequest
    {
        $this->idType = $idType;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdNumber(): string
    {
        return $this->idNumber;
    }

    /**
     * @param string $idNumber
     * @return OrganizationRequest
     */
    public function setIdNumber(string $idNumber): OrganizationRequest
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
     * @return OrganizationRequest
     */
    public function setOrgLegalIdNumber(?string $orgLegalIdNumber): OrganizationRequest
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
     * @return OrganizationRequest
     */
    public function setOrgLegalName(?string $orgLegalName): OrganizationRequest
    {
        $this->orgLegalName = $orgLegalName;
        return $this;
    }

    public function jsonSerialize()
    {
       return array_filter([
           'thirdPartyUserId' => $this->thirdPartyUserId,
           'creator' => $this->creator,
           'name' => $this->name,
           'idType' => $this->idType,
           'idNumber' => $this->idNumber,
           'orgLegalIdNumber' => $this->orgLegalIdNumber,
           'orgLegalName' => $this->orgLegalName
       ]);
    }


}