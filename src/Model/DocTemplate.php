<?php


namespace Jmy\Esign\Model;


class DocTemplate
{
    private $templateId;

    private $uploadUrl;

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     * @return DocTemplate
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUploadUrl()
    {
        return $this->uploadUrl;
    }

    /**
     * @param mixed $uploadUrl
     * @return DocTemplate
     */
    public function setUploadUrl($uploadUrl)
    {
        $this->uploadUrl = $uploadUrl;
        return $this;
    }


}