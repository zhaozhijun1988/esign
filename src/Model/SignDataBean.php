<?php


namespace Jmy\Esign\Model;


class SignDataBean implements \JsonSerializable
{
    /**
     * @var $fontSize integer | null
     */
    private $fontSize;


    /**
     * @var $format string | null
     */
    private $format;

    /**
     * @var $posPage integer | null
     */
    private $posPage;

    /**
     * @var $posX float | null
     */
    private $posX;

    /**
     * @var $posY float | null
     */
    private $posY;

    /**
     * @return int|null
     */
    public function getFontSize(): ?int
    {
        return $this->fontSize;
    }

    /**
     * @param int|null $fontSize
     * @return SignDataBean
     */
    public function setFontSize(?int $fontSize): SignDataBean
    {
        $this->fontSize = $fontSize;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string|null $format
     * @return SignDataBean
     */
    public function setFormat(?string $format): SignDataBean
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPosPage(): ?int
    {
        return $this->posPage;
    }

    /**
     * @param int|null $posPage
     * @return SignDataBean
     */
    public function setPosPage(?int $posPage): SignDataBean
    {
        $this->posPage = $posPage;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPosX(): ?float
    {
        return $this->posX;
    }

    /**
     * @param float|null $posX
     * @return SignDataBean
     */
    public function setPosX(?float $posX): SignDataBean
    {
        $this->posX = $posX;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPosY(): ?float
    {
        return $this->posY;
    }

    /**
     * @param float|null $posY
     * @return SignDataBean
     */
    public function setPosY(?float $posY): SignDataBean
    {
        $this->posY = $posY;
        return $this;
    }

    public function jsonSerialize()
    {
       return array_filter([
          'fontSize' => $this->getFontSize(),
          'format' => $this->getFormat(),
          'posPage' => $this->getPosPage(),
          'posX' => $this->getPosX(),
          'posY' => $this->getPosY()
       ]);
    }
}