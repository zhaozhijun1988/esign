<?php

namespace Jmy\Esign\Model;


/**
 * Class SignFiled
 * @package Jmy\Esign\Model
 * @see https://qianxiaoxia.yuque.com/books/share/3d2b1b90-6e3f-4647-b86b-1480f724a6d5/pwd6l4
 */
class SignFiled implements \JsonSerializable
{
    const SIGN_TYPE_UNLIMITED = 0;

    const SIGN_TYPE_SINGLE_PAGE = 1;

    const SIGN_TYPE_CREVICE = 2;

    const SEAL_TYPE_HAND_DRAW = 0;

    const SEAL_TYPE_SEAL = 1;

    /**
     * @var $autoExecute boolean | null
     */
    private $autoExecute;

    /**
     * @var $actorIndentityType string | null
     */
    private $actorIndentityType;

    /**
     * @var $fileId string
     */
    private $fileId;

    /**
     * @var $sealId string | null
     */
    private $sealId;

    /**
     * @var $sealType string | null
     */
    private $sealType;

    /**
     * @var $signType integer | null
     */
    private $signType;

    /**
     * @var $posBean PosBean | null
     */
    private $posBean;

    /**
     * @var $width integer | null
     */
    private $width;

    /**
     * @var $signDateBeanType integer | null
     */
    private $signDateBeanType;

    /**
     * @var $signDateBean SignDataBean | null
     */
    private $signDateBean;

    /**
     * @var $thirdOrderNo string | null
     */
    private $thirdOrderNo;

    /**
     * @return bool|null
     */
    public function getAutoExecute(): ?bool
    {
        return $this->autoExecute;
    }

    /**
     * @param bool|null $autoExecute
     * @return SignFiled
     */
    public function setAutoExecute(?bool $autoExecute): SignFiled
    {
        $this->autoExecute = $autoExecute;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getActorIndentityType(): ?string
    {
        return $this->actorIndentityType;
    }

    /**
     * @param string|null $actorIndentityType
     * @return SignFiled
     */
    public function setActorIndentityType(?string $actorIndentityType): SignFiled
    {
        $this->actorIndentityType = $actorIndentityType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     * @return SignFiled
     */
    public function setFileId(string $fileId): SignFiled
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSealId(): ?string
    {
        return $this->sealId;
    }

    /**
     * @param string|null $sealId
     * @return SignFiled
     */
    public function setSealId(?string $sealId): SignFiled
    {
        $this->sealId = $sealId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSealType(): ?string
    {
        return $this->sealType;
    }

    /**
     * @param string|null $sealType
     * @return SignFiled
     */
    public function setSealType(?string $sealType): SignFiled
    {
        $this->sealType = $sealType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSignType(): ?int
    {
        return $this->signType;
    }

    /**
     * @param int|null $signType
     * @return SignFiled
     */
    public function setSignType(?int $signType): SignFiled
    {
        $this->signType = $signType;
        return $this;
    }

    /**
     * @return PosBean|null
     */
    public function getPosBean(): ?PosBean
    {
        return $this->posBean;
    }

    /**
     * @param PosBean|null $posBean
     * @return SignFiled
     */
    public function setPosBean(?PosBean $posBean): SignFiled
    {
        $this->posBean = $posBean;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     * @return SignFiled
     */
    public function setWidth(?int $width): SignFiled
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSignDateBeanType(): ?int
    {
        return $this->signDateBeanType;
    }

    /**
     * @param int|null $signDateBeanType
     * @return SignFiled
     */
    public function setSignDateBeanType(?int $signDateBeanType): SignFiled
    {
        $this->signDateBeanType = $signDateBeanType;
        return $this;
    }

    /**
     * @return SignDataBean|null
     */
    public function getSignDateBean(): ?SignDataBean
    {
        return $this->signDateBean;
    }

    /**
     * @param SignDataBean|null $signDateBean
     * @return SignFiled
     */
    public function setSignDateBean(?SignDataBean $signDateBean): SignFiled
    {
        $this->signDateBean = $signDateBean;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThirdOrderNo(): ?string
    {
        return $this->thirdOrderNo;
    }

    /**
     * @param string|null $thirdOrderNo
     * @return SignFiled
     */
    public function setThirdOrderNo(?string $thirdOrderNo): SignFiled
    {
        $this->thirdOrderNo = $thirdOrderNo;
        return $this;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'autoExecute' => $this->getAutoExecute(),
            'actorIndentityType' => $this->getActorIndentityType(),
            'fileId' => $this->getFileId(),
            'sealId' => $this->getSealId(),
            'signType' => $this->getSignType(),
            'sealType' => $this->getSealType(),
            'signDateBeanType' => $this->getSignDateBeanType(),
            'signDateBean' => $this->getSignDateBean(),
            'posBean' => $this->getPosBean(),
            'thirdOrderNo' => $this->getThirdOrderNo(),
            'width' => $this->getWidth()
        ], function ($i) {
            if ($i === null || $i === '')
                return false;
            return true;
        });
    }


}