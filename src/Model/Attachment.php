<?php


namespace Jmy\Esign\Model;


class Attachment implements \JsonSerializable
{
    /**
     * @var $fieldId string
     */
    private $fieldId;

    /**
     * @var $attachmentName string
     */
    private $attachmentName;

    /**
     * @return string
     */
    public function getFieldId(): string
    {
        return $this->fieldId;
    }

    /**
     * @param string $fieldId
     * @return Attachment
     */
    public function setFieldId(string $fieldId): Attachment
    {
        $this->fieldId = $fieldId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttachmentName(): string
    {
        return $this->attachmentName;
    }

    /**
     * @param string $attachmentName
     * @return Attachment
     */
    public function setAttachmentName(string $attachmentName): Attachment
    {
        $this->attachmentName = $attachmentName;
        return $this;
    }

    public function jsonSerialize()
    {
       return [
           'fieldId' => $this->fieldId,
           'attachmentName' => $this->attachmentName
       ];
    }


}