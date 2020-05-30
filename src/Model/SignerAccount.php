<?php

namespace Jmy\Esign\Model;


class SignerAccount implements \JsonSerializable
{
    /**
     * @var $signerAccountId string | null
     */
    private $signerAccountId;

    /**
     * @var $authorizedAccountId string | null
     */
    private $authorizedAccountId;

    /**
     * @return null|string
     */
    public function getSignerAccountId(): ?string
    {
        return $this->signerAccountId;
    }

    /**
     * @param null|string $signerAccountId
     *
     * @return SignerAccount
     */
    public function setSignerAccountId(?string $signerAccountId): SignerAccount
    {
        $this->signerAccountId = $signerAccountId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAuthorizedAccountId(): ?string
    {
        return $this->authorizedAccountId;
    }

    /**
     * @param null|string $authorizedAccountId
     *
     * @return SignerAccount
     */
    public function setAuthorizedAccountId(?string $authorizedAccountId
    ): SignerAccount {
        $this->authorizedAccountId = $authorizedAccountId;

        return $this;
    }



    public function jsonSerialize()
    {
        return [
            'signerAccountId' => $this->getSignerAccountId(),
            'authorizedAccountId' => $this->getAuthorizedAccountId()
        ];
    }


}