<?php


namespace Jmy\Esign\Model;


class Document implements \JsonSerializable
{

    /**
     * @var $fileId string
     */
    private $fileId;

    /**
     * @var $fileName string | null
     */
    private $fileName;

    /**
     * @var $encryption string | null
     */
    private $encryption;

    /**
     * @var $filePassword string | null
     */
    private $filePassword;

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     * @return Document
     */
    public function setFileId(string $fileId): Document
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string|null $fileName
     * @return Document
     */
    public function setFileName(?string $fileName): Document
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEncryption(): ?string
    {
        return $this->encryption;
    }

    /**
     * @param string|null $encryption
     * @return Document
     */
    public function setEncryption(?string $encryption): Document
    {
        $this->encryption = $encryption;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilePassword(): ?string
    {
        return $this->filePassword;
    }

    /**
     * @param string|null $filePassword
     * @return Document
     */
    public function setFilePassword(?string $filePassword): Document
    {
        $this->filePassword = $filePassword;
        return $this;
    }

    public function jsonSerialize()
    {
       return [
           'fileId' => $this->getFileId(),
           'fileName' => $this->getFileName(),
           'encryption' => $this->getEncryption(),
           'filePassword' => $this->getFilePassword()
       ];
    }


}