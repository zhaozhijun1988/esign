<?php


namespace Jmy\Esign\Model;

/**
 * Class FlowUpdateNotice
 * @package Jmy\Esign\Model
 * @see  https://qianxiaoxia.yuque.com/books/share/3d2b1b90-6e3f-4647-b86b-1480f724a6d5/awifwu
 */
class FlowUpdateNotice extends Notice
{

    const SIGN_SUCCESS = 2;

    CONST SIGN_REFUSE = 4;

    CONST SIGN_FAILURE = 3;

    /**
     * @var string $accountId
     */
    private $accountId;

    /**
     * @var string $authorizedAccountId
     */
    private $authorizedAccountId;

    /**
     * @var string $thirdOrderNo
     */
    private $thirdOrderNo;

    /**
     * @var integer $order
     */
    private $order;

    /**
     * @var string $signTime
     */
    private $signTime;

    /**
     * @var integer $signResult
     */
    private $signResult;

    /**
     * @var $resultDescription string
     */
    private $resultDescription;

    /**
     * @var $timestamp integer
     */
    private $timestamp;

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return FlowUpdateNotice
     */
    public function setAccountId(string $accountId): FlowUpdateNotice
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizedAccountId(): string
    {
        return $this->authorizedAccountId;
    }

    /**
     * @param string $authorizedAccountId
     * @return FlowUpdateNotice
     */
    public function setAuthorizedAccountId(string $authorizedAccountId): FlowUpdateNotice
    {
        $this->authorizedAccountId = $authorizedAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdOrderNo(): string
    {
        return $this->thirdOrderNo;
    }

    /**
     * @param string $thirdOrderNo
     * @return FlowUpdateNotice
     */
    public function setThirdOrderNo(string $thirdOrderNo): FlowUpdateNotice
    {
        $this->thirdOrderNo = $thirdOrderNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @param int $order
     * @return FlowUpdateNotice
     */
    public function setOrder(int $order): FlowUpdateNotice
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignTime(): string
    {
        return $this->signTime;
    }

    /**
     * @param string $signTime
     * @return FlowUpdateNotice
     */
    public function setSignTime(string $signTime): FlowUpdateNotice
    {
        $this->signTime = $signTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSignResult(): int
    {
        return $this->signResult;
    }

    /**
     * @param int $signResult
     * @return FlowUpdateNotice
     */
    public function setSignResult(int $signResult): FlowUpdateNotice
    {
        $this->signResult = $signResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultDescription(): string
    {
        return $this->resultDescription;
    }

    /**
     * @param string $resultDescription
     * @return FlowUpdateNotice
     */
    public function setResultDescription(string $resultDescription): FlowUpdateNotice
    {
        $this->resultDescription = $resultDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     * @return FlowUpdateNotice
     */
    public function setTimestamp(int $timestamp): FlowUpdateNotice
    {
        $this->timestamp = $timestamp;
        return $this;
    }

}