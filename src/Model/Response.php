<?php


namespace Jmy\Esign\Model;


class Response
{

    const OK = 0;
    /**
     * @var $code integer
     */
    private $code;

    /**
     * @var $message string
     */
    private $message;

    /**
     * @var $data array | bool
     */
    private $data;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return Response
     */
    public function setCode(int $code): Response
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Response
     */
    public function setMessage(string $message): Response
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return array|bool
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array|bool $data
     * @return Response
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }



}