<?php


namespace Jmy\Esign\Request;


class AccountSealRequest extends SealRequest implements \JsonSerializable
{

    const TYPE_SQUARE = 'SQUARE';

    /**
     * @var $accountId string
     */
    private $accountId;

    /**
     * @var $alias string | null
     */
    private $alias;

    /**
     * @var $type string
     */
    private $type;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return AccountSealRequest
     */
    public function setAccountId(string $accountId): AccountSealRequest
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string|null $alias
     * @return AccountSealRequest
     */
    public function setAlias(?string $alias): AccountSealRequest
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return AccountSealRequest
     */
    public function setType(string $type): AccountSealRequest
    {
        $this->type = $type;
        return $this;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'alias' => $this->alias,
            'color' => $this->getColor(),
            'height' => $this->getHeight(),
            'width' => $this->getWidth(),
            'type' => $this->type,
        ]);
    }


}