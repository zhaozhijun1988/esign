<?php


namespace Jmy\Esign\Model;


class Copier implements \JsonSerializable
{
    CONST TYPE_ACCOUNT = 0;

    CONST TYPE_ORGANIZATION = 1;
    /**
     * @var $copierAccountId string
     */
    private $copierAccountId;

    /**
     * @var $copierIdentityAccountType string
     */
    private $copierIdentityAccountType;

    /**
     * @var $copierIdentityAccountId string | null
     */
    private $copierIdentityAccountId;

    /**
     * @return string
     */
    public function getCopierAccountId(): string
    {
        return $this->copierAccountId;
    }

    /**
     * @param string $copierAccountId
     * @return Copier
     */
    public function setCopierAccountId(string $copierAccountId): Copier
    {
        $this->copierAccountId = $copierAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCopierIdentityAccountType(): string
    {
        return $this->copierIdentityAccountType;
    }

    /**
     * @param string $copierIdentityAccountType
     * @return Copier
     */
    public function setCopierIdentityAccountType(string $copierIdentityAccountType): Copier
    {
        $this->copierIdentityAccountType = $copierIdentityAccountType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCopierIdentityAccountId(): ?string
    {
        return $this->copierIdentityAccountId;
    }

    /**
     * @param string|null $copierIdentityAccountId
     * @return Copier
     */
    public function setCopierIdentityAccountId(?string $copierIdentityAccountId): Copier
    {
        $this->copierIdentityAccountId = $copierIdentityAccountId;
        return $this;
    }



    public function jsonSerialize()
    {
        return [
            'copierAccountId' => $this->getCopierAccountId(),
            'copierIdentityAccountType' => $this->getCopierIdentityAccountType(),
            'copierIdentityAccountId' => $this->getCopierIdentityAccountId()
        ];
    }


}