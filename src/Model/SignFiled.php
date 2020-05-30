<?php

namespace Jmy\Esign\Model;


class SignFiled implements \JsonSerializable
{
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
     * @return bool|null
     */
    public function getAutoExecute(): ?bool
    {
        return $this->autoExecute;
    }

    /**
     * @param bool|null $autoExecute
     */
    public function setAutoExecute(?bool $autoExecute): void
    {
        $this->autoExecute = $autoExecute;
    }

    /**
     * @return null|string
     */
    public function getActorIndentityType(): ?string
    {
        return $this->actorIndentityType;
    }

    /**
     * @param null|string $actorIndentityType
     *
     * @return SignFiled
     */
    public function setActorIndentityType(?string $actorIndentityType): self
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
     *
     * @return SignFiled
     */
    public function setFileId(string $fileId): self
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSealId(): ?string
    {
        return $this->sealId;
    }

    /**
     * @param null|string $sealId
     */
    public function setSealId(?string $sealId): void
    {
        $this->sealId = $sealId;
    }

    /**
     * @return null|string
     */
    public function getSealType(): ?string
    {
        return $this->sealType;
    }

    /**
     * @param null|string $sealType
     */
    public function setSealType(?string $sealType): void
    {
        $this->sealType = $sealType;
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
     *
     * @return SignFiled
     */
    public function setSignType(?int $signType): SignFiled
    {
        $this->signType = $signType;

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
            'sealType' => $this->getSealType()
        ], function ($i) {
            if ($i === null || $i === '')
                return false;
            return true;
        });
    }


}