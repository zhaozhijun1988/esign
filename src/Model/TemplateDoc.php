<?php


namespace Jmy\Esign\Model;


class TemplateDoc
{
    /**
     * @var $templateId string
     */
    private $templateId;

    /**
     * @var $downloadUrl string
     */
    private $downloadUrl;

    /**
     * @var $fileSize integer
     */
    private $fileSize;

    /**
     * @var $templateName string
     */
    private $templateName;

    /**
     * @var $templateType integer
     */
    private $templateType;

    /**
     * @return string
     */
    public function getTemplateId(): string
    {
        return $this->templateId;
    }

    /**
     * @param string $templateId
     * @return TemplateDoc
     */
    public function setTemplateId(string $templateId): TemplateDoc
    {
        $this->templateId = $templateId;
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
     * @return TemplateDoc
     */
    public function setDownloadUrl(string $downloadUrl): TemplateDoc
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return TemplateDoc
     */
    public function setFileSize(int $fileSize): TemplateDoc
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return TemplateDoc
     */
    public function setTemplateName(string $templateName): TemplateDoc
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateType(): int
    {
        return $this->templateType;
    }

    /**
     * @param int $templateType
     * @return TemplateDoc
     */
    public function setTemplateType(int $templateType): TemplateDoc
    {
        $this->templateType = $templateType;
        return $this;
    }

}