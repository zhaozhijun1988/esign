<?php

namespace Jmy\Esign\Request;


use Symfony\Component\HttpFoundation\File\File;

class DocTemplateRequest implements \JsonSerializable
{

    /**
     * @var $file File
     */
    private $file;

    /**
     * @var $contentMd5 string
     */
    private $contentMd5;

    /**
     * @var $contentType string
     */
    private $contentType;

    /**
     * @var $fileName string
     */
    private $fileName;

    /**
     * @var $convert2Pdf boolean
     */
    private $convert2Pdf;

    public function __construct(string $filePath)
    {
        $this->file = new File($filePath);
        $this->contentMd5 = base64_encode(md5_file($filePath, true));
        $this->contentType = $this->file->getMimeType();
        $this->fileName = $this->file->getFilename();
        $this->convert2Pdf = strpos('pdf', $this->file->getMimeType()) ? true : false;
    }

    /**
     * @return File
     */
    public function getFile(): File
    {
        return $this->file;
    }

    /**
     * @param File $file
     * @return DocTemplateRequest
     */
    public function setFile(File $file): DocTemplateRequest
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentMd5(): string
    {
        return $this->contentMd5;
    }

    /**
     * @param string $contentMd5
     * @return DocTemplateRequest
     */
    public function setContentMd5(string $contentMd5): DocTemplateRequest
    {
        $this->contentMd5 = $contentMd5;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return DocTemplateRequest
     */
    public function setContentType(string $contentType): DocTemplateRequest
    {
        $this->contentType = $contentType;
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
     * @return DocTemplateRequest
     */
    public function setFileName(string $fileName): DocTemplateRequest
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConvert2Pdf(): bool
    {
        return $this->convert2Pdf;
    }

    /**
     * @param bool $convert2Pdf
     * @return DocTemplateRequest
     */
    public function setConvert2Pdf(bool $convert2Pdf): DocTemplateRequest
    {
        $this->convert2Pdf = $convert2Pdf;
        return $this;
    }



    public function jsonSerialize()
    {
        return [
            'contentMd5' => $this->getContentMd5(),
            'contentType' => $this->getContentType(),
            'fileName' => $this->getFileName(),
            'convert2Pdf' => $this->isConvert2Pdf()
        ];
    }


}