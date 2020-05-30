<?php


namespace Jmy\Esign\Model;


class SignFile
{
    /**
     * @var $fileId string
     */
    private $fileId;

    /**
     * @var $fileName string
     */
    private $fileName;

    /**
     * @var $downloadUrl string
     */
    private $downloadUrl;

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     * @return SignFile
     */
    public function setFileId(string $fileId): SignFile
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return SignFile
     */
    public function setFileName(string $fileName): SignFile
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrl(): string
    {
        return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return SignFile
     */
    public function setDownloadUrl(string $downloadUrl): SignFile
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

}