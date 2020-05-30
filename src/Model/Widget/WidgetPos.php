<?php


namespace Jmy\Esign\Model\Widget;


class WidgetPos implements \JsonSerializable
{
    /**
     * @var $page integer
     */
    private $page;

    /**
     * @var $x float
     */
    private $x;

    /**
     * @var $y float
     */
    private $y;

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return WidgetPos
     */
    public function setPage(int $page): WidgetPos
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @param float $x
     * @return WidgetPos
     */
    public function setX(float $x): WidgetPos
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @param float $y
     * @return WidgetPos
     */
    public function setY(float $y): WidgetPos
    {
        $this->y = $y;
        return $this;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'page' => $this->page,
            'x' => $this->x,
            'y' => $this->y
        ]);
    }


}