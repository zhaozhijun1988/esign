<?php


namespace Jmy\Esign\Model\Widget;


class InputWidget implements \JsonSerializable
{

    /**
     * @var $label string
     */
    private $label;

    /**
     * @var $required boolean | null
     */
    private $required;

    /**
     * @var $limit string
     */
    private $limit;

    /**
     * @var $style WidgetStyle
     */
    private $style;

    /**
     * @var $pos WidgetPos
     */
    private $pos;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return InputWidget
     */
    public function setLabel(string $label): InputWidget
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * @param bool|null $required
     * @return InputWidget
     */
    public function setRequired(?bool $required): InputWidget
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @return string
     */
    public function getLimit(): string
    {
        return $this->limit;
    }

    /**
     * @param string $limit
     * @return InputWidget
     */
    public function setLimit(string $limit): InputWidget
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return WidgetStyle
     */
    public function getStyle(): WidgetStyle
    {
        return $this->style;
    }

    /**
     * @param WidgetStyle $style
     * @return InputWidget
     */
    public function setStyle(WidgetStyle $style): InputWidget
    {
        $this->style = $style;
        return $this;
    }


    /**
     * @return WidgetPos
     */
    public function getPos(): WidgetPos
    {
        return $this->pos;
    }

    /**
     * @param WidgetPos $pos
     * @return InputWidget
     */
    public function setPos(WidgetPos $pos): InputWidget
    {
        $this->pos = $pos;
        return $this;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'label' => $this->label,
            'required' => $this->required,
            'limit' => $this->limit,
            'style' => $this->style,
            'pos' => $this->pos
        ]);
    }


}