<?php


namespace Jmy\Esign\Model;


class SealId
{
    /**
     * @var $sealId string
     */
    private $sealId;

    /**
     * @var $fileKey string
     */
    private $fileKey;

    /**
     * @var $url
     */
    private $url;

    /**
     * @var $width integer
     */
    private $width;

    /**
     * @var $height integer
     */
    private $height;

    /**
     * @return string
     */
    public function getSealId(): string
    {
        return $this->sealId;
    }

    /**
     * @param string $sealId
     * @return SealId
     */
    public function setSealId(string $sealId): SealId
    {
        $this->sealId = $sealId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileKey(): string
    {
        return $this->fileKey;
    }

    /**
     * @param string $fileKey
     * @return SealId
     */
    public function setFileKey(string $fileKey): SealId
    {
        $this->fileKey = $fileKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return SealId
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return SealId
     */
    public function setWidth(int $width): SealId
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return SealId
     */
    public function setHeight(int $height): SealId
    {
        $this->height = $height;
        return $this;
    }


}