<?php


namespace Jmy\Esign\Model;


use Jmy\Esign\Model\Widget\InputComponent;
use Doctrine\Common\Collections\ArrayCollection;

class TemplateComponent implements \JsonSerializable
{
    /**
     * @var $templateId string
     */
    private $templateId;

    /**
     * @var $structComponent ArrayCollection<InputComponent>
     */
    private $structComponent;

    public function __construct()
    {
        $this->structComponent = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getTemplateId(): string
    {
        return $this->templateId;
    }

    /**
     * @param string $templateId
     * @return TemplateComponent
     */
    public function setTemplateId(string $templateId): TemplateComponent
    {
        $this->templateId = $templateId;
        return $this;
    }

    public function addStructComponent(InputComponent $component)
    {
        $this->structComponent->add($component);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getStructComponent(): ArrayCollection
    {
        return $this->structComponent;
    }

    /**
     * @param ArrayCollection $structComponent
     * @return TemplateComponent
     */
    public function setStructComponent(ArrayCollection $structComponent): TemplateComponent
    {
        $this->structComponent = $structComponent;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'structComponent' => $this->getStructComponent()->toArray()
        ];
    }


}