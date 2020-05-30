<?php


namespace Jmy\Esign\Model\Widget;


class InputComponent implements \JsonSerializable
{

    CONST TYPE_TEXT = 1;

    CONST TYPE_NUMBER = 2;

    CONST TYPE_DATE = 3;

    CONST TYPE_SIGN = 6;


    /**
     * @var $id integer
     */
    private $id;

    /**
     * @var $key string | null
     */
    private $key;

    /**
     * @var $type integer
     */
    private $type;

    /**
     * @var $context InputWidget
     */
    private $context;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return InputComponent
     */
    public function setId(int $id): InputComponent
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string|null $key
     * @return InputComponent
     */
    public function setKey(?string $key): InputComponent
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return InputComponent
     */
    public function setType(int $type): InputComponent
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return InputWidget
     */
    public function getContext(): InputWidget
    {
        return $this->context;
    }

    /**
     * @param InputWidget $context
     * @return InputComponent
     */
    public function setContext(InputWidget $context): InputComponent
    {
        $this->context = $context;
        return $this;
    }

    public function jsonSerialize()
    {
       return array_filter([
           'id' => $this->id,
           'key' => $this->key,
           'type' => $this->type,
           'context' => $this->context
       ]);
    }

}