<?php


namespace Jmy\Esign\Request;


class SignFileRequest implements \JsonSerializable
{

    /**
     * @var $templateId string
     */
    private $templateId;

    /**
     * @var $name string
     */
    private $name;

    /**
     * @var $simpleFormFields []
     */
    private $simpleFormFields;

    /**
     * @return string
     */
    public function getTemplateId(): string
    {
        return $this->templateId;
    }

    /**
     * @param string $templateId
     * @return SignFileRequest
     */
    public function setTemplateId(string $templateId): SignFileRequest
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return SignFileRequest
     */
    public function setName(string $name): SignFileRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSimpleFormFields()
    {
        return $this->simpleFormFields ?? [];
    }

    /**
     * @param mixed $simpleFormFields
     * @return SignFileRequest
     */
    public function setSimpleFormFields($simpleFormFields)
    {
        $this->simpleFormFields = $simpleFormFields;
        return $this;
    }



    public function jsonSerialize()
    {
        return array_filter([
            'templateId' => $this->getTemplateId(),
            'name' => $this->getName(),
            'simpleFormFields' => count($this->getSimpleFormFields()) > 0 ? $this->getSimpleFormFields() : null
        ]);
    }

}