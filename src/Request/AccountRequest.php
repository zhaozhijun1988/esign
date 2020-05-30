<?php


namespace Jmy\Esign\Request;


class AccountRequest implements \JsonSerializable
{

    const CRED_PSN_CH_IDCARD = 'CRED_PSN_CH_IDCARD';

    /**
     * @var $thirdPartyUserId string
     */
    private $thirdPartyUserId;

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
     * @var $mobile string | null
     */
    private $mobile;

    /**
     * @var $email string | null
     */
    private $email;

    /**
     * @return string
     */
    public function getThirdPartyUserId(): string
    {
        return $this->thirdPartyUserId;
    }

    /**
     * @param string $thirdPartyUserId
     * @return AccountRequest
     */
    public function setThirdPartyUserId(string $thirdPartyUserId): AccountRequest
    {
        $this->thirdPartyUserId = $thirdPartyUserId;
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
     * @return AccountRequest
     */
    public function setName(string $name): AccountRequest
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
     * @return AccountRequest
     */
    public function setIdType(string $idType): AccountRequest
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
     * @return AccountRequest
     */
    public function setIdNumber(string $idNumber): AccountRequest
    {
        $this->idNumber = $idNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string|null $mobile
     * @return AccountRequest
     */
    public function setMobile(?string $mobile): AccountRequest
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return AccountRequest
     */
    public function setEmail(?string $email): AccountRequest
    {
        $this->email = $email;
        return $this;
    }

    public function jsonSerialize()
    {
       return array_filter([
           'thirdPartyUserId' => $this->thirdPartyUserId,
           'name' => $this->name,
           'idType' => $this->idType,
           'idNumber' => $this->idNumber,
           'mobile' => $this->mobile,
           'email' => $this->email
       ]);
    }


}