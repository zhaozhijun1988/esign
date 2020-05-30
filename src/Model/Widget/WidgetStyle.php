<?php

namespace Jmy\Esign\Model\Widget;


class WidgetStyle implements \JsonSerializable
{
    /**
     * @var $width float
     */
    private $width;

    /**
     * @var $height float
     */
    private $height;

    /**
     * @var $font string | null
     */
    private $font;

    /**
     * @var $fontSize float | null
     */
    private $fontSize;

    /**
     * @var $textColor string | null
     */
    private $textColor;

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @return WidgetStyle
     */
    public function setWidth(float $width): WidgetStyle
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @return WidgetStyle
     */
    public function setHeight(float $height): WidgetStyle
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFont(): ?string
    {
        return $this->font;
    }

    /**
     * @param string|null $font
     * @return WidgetStyle
     */
    public function setFont(?string $font): WidgetStyle
    {
        $this->font = $font;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getFontSize(): ?float
    {
        return $this->fontSize;
    }

    /**
     * @param float|null $fontSize
     * @return WidgetStyle
     */
    public function setFontSize(?float $fontSize): WidgetStyle
    {
        $this->fontSize = $fontSize;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTextColor(): ?string
    {
        return $this->textColor;
    }

    /**
     * @param string|null $textColor
     * @return WidgetStyle
     */
    public function setTextColor(?string $textColor): WidgetStyle
    {
        $this->textColor = $textColor;
        return $this;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'width' => $this->width,
            'height' => $this->height,
            'font' => $this->font,
            'fontSize' => $this->fontSize,
            'textColor' => $this->textColor
        ]);
    }


}