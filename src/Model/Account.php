<?php


namespace Jmy\Esign\Model;


class Account
{
    /**
     * @var $accountId string
     */
    private $accountId;

    /**
     * @var $thirdPartyUserId string | null
     */
    private $thirdPartyUserId;

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
     * @var $mobile string | null
     */
    private $mobile;

    /**
     * @var $email string | null
     */
    private $email;

    /**
     * @var $thirdPartyUserType string | null
     */
    private $thirdPartyUserType;

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return Account
     */
    public function setAccountId(string $accountId): Account
    {
        $this->accountId = $accountId;
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
     * @return Account
     */
    public function setThirdPartyUserId(?string $thirdPartyUserId): Account
    {
        $this->thirdPartyUserId = $thirdPartyUserId;
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
     * @return Account
     */
    public function setName(?string $name): Account
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
     * @return Account
     */
    public function setIdType(?string $idType): Account
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
     * @return Account
     */
    public function setIdNumber(?string $idNumber): Account
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
     * @return Account
     */
    public function setMobile(?string $mobile): Account
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
     * @return Account
     */
    public function setEmail(?string $email): Account
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThirdPartyUserType(): ?string
    {
        return $this->thirdPartyUserType;
    }

    /**
     * @param string|null $thirdPartyUserType
     * @return Account
     */
    public function setThirdPartyUserType(?string $thirdPartyUserType): Account
    {
        $this->thirdPartyUserType = $thirdPartyUserType;
        return $this;
    }

}