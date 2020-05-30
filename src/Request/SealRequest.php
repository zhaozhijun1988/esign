<?php


namespace Jmy\Esign\Request;


class SealRequest
{

    const COLOR_RED = 'RED';

    const COLOR_BLUE = 'BLUE';

    const COLOR_BLACK = 'BLACK';

    /**
     * @var $color string
     */
    private $color;

    /**
     * @var $width string
     */
    private $width;

    /**
     * @var $height string
     */
    private $height;

    public function __construct()
    {
        $this->width = 95;
        $this->height = 95;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return SealRequest
     */
    public function setColor(string $color): SealRequest
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @param string $width
     * @return SealRequest
     */
    public function setWidth(string $width): SealRequest
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     * @return SealRequest
     */
    public function setHeight(string $height): SealRequest
    {
        $this->height = $height;
        return $this;
    }

}