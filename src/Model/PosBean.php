<?php


namespace Jmy\Esign\Model;


class PosBean implements \JsonSerializable
{
    /**
     * @var $posPage integer | null
     */
    private $posPage;

    /**
     * @var $posX integer | null
     */
    private $posX;

    /**
     * @var $posY integer | null
     */
    private $posY;

    /**
     * @return int|null
     */
    public function getPosPage(): ?int
    {
        return $this->posPage;
    }

    /**
     * @param int|null $posPage
     * @return PosBean
     */
    public function setPosPage(?int $posPage): PosBean
    {
        $this->posPage = $posPage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPosX(): ?int
    {
        return $this->posX;
    }

    /**
     * @param int|null $posX
     * @return PosBean
     */
    public function setPosX(?int $posX): PosBean
    {
        $this->posX = $posX;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPosY(): ?int
    {
        return $this->posY;
    }

    /**
     * @param int|null $posY
     * @return PosBean
     */
    public function setPosY(?int $posY): PosBean
    {
        $this->posY = $posY;
        return $this;
    }


    public function jsonSerialize()
    {
        return [
            'posPage' => $this->getPosPage(),
            'posX' => $this->getPosX(),
            'posY' => $this->getPosY()
        ];
    }

}