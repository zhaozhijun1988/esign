<?php
namespace Jmy\Esign\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Jmy\Esign\Model\SignFiled;

class Signer implements  \JsonSerializable
{
    /**
     * @var $platformSign boolean | null
     */
    private $platformSign;

    /**
     * @var $signOrder integer | null
     */
    private $signOrder;

    /**
     * @var $signerAccount SignerAccount | null
     */
    private $signerAccount;

    /**
     * @var $signfields ArrayCollection<SignFiled>
     */
    private $signfields;

    /**
     * @var $thirdOrderNo string | null
     */
    private $thirdOrderNo;

    public function __construct()
    {
        $this->signfields = new ArrayCollection();
        $this->platformSign = false;
    }

    /**
     * @return bool|null
     */
    public function getPlatformSign(): ?bool
    {
        return $this->platformSign;
    }

    /**
     * @param bool|null $platformSign
     *
     * @return Signer
     */
    public function setPlatformSign(?bool $platformSign): Signer
    {
        $this->platformSign = $platformSign;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSignOrder(): ?int
    {
        return $this->signOrder;
    }

    /**
     * @param int|null $signOrder
     *
     * @return Signer
     */
    public function setSignOrder(?int $signOrder): Signer
    {
        $this->signOrder = $signOrder;

        return $this;
    }

    /**
     * @return SignerAccount|null
     */
    public function getSignerAccount(): ?SignerAccount
    {
        return $this->signerAccount;
    }

    /**
     * @param SignerAccount|null $signerAccount
     *
     * @return Signer
     */
    public function setSignerAccount(?SignerAccount $signerAccount): Signer
    {
        $this->signerAccount = $signerAccount;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSignfields(): ArrayCollection
    {
        return $this->signfields;
    }

    /**
     * @param ArrayCollection $signfields
     *
     * @return Signer
     */
    public function setSignfields(ArrayCollection $signfields): Signer
    {
        $this->signfields = $signfields;

        return $this;
    }

    public function addSignField(SignFiled $s)
    {
        $this->signfields->add($s);
        return $this;
    }

    /**
     * @return null|string
     */
    public function getThirdOrderNo(): ?string
    {
        return $this->thirdOrderNo;
    }

    /**
     * @param null|string $thirdOrderNo
     *
     * @return Signer
     */
    public function setThirdOrderNo(?string $thirdOrderNo): Signer
    {
        $this->thirdOrderNo = $thirdOrderNo;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'platformSign' => $this->getPlatformSign(),
            'signOrder' => $this->getSignOrder(),
            'signerAccount' => $this->getSignerAccount(),
            'signfields' => $this->getSignfields()->toArray(),
            'thirdOrderNo' => $this->getThirdOrderNo()
        ];
    }


}