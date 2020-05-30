<?php


namespace Jmy\Esign\Model;


/**
 * Class FlowFinishNotice
 * @package Jmy\Esign\Model
 * @see  https://qianxiaoxia.yuque.com/books/share/3d2b1b90-6e3f-4647-b86b-1480f724a6d5/ld5udg
 */
class FlowFinishNotice extends Notice
{

    const STATUS_FINISH = 2;

    const STATUS_REVOKE = 3;

    const STATUS_EXPIRED = 5;

    const STATUS_REFUSE = 7;

    /**
     * @var string
     */
    private $businessScence;

    /**
     * @var string
     */
    private $flowStatus;

    /**
     * @var string
     */
    private $createTime;

    /**
     * @var string
     */
    private $endTime;

    /**
     * @var string
     */
    private $statusDescription;

    /**
     * @var integer
     */
    private $timestamp;

    /**
     * @return string
     */
    public function getBusinessScence(): string
    {
        return $this->businessScence;
    }

    /**
     * @param string $businessScence
     * @return FlowFinishNotice
     */
    public function setBusinessScence(string $businessScence): FlowFinishNotice
    {
        $this->businessScence = $businessScence;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlowStatus(): string
    {
        return $this->flowStatus;
    }

    /**
     * @param string $flowStatus
     * @return FlowFinishNotice
     */
    public function setFlowStatus(string $flowStatus): FlowFinishNotice
    {
        $this->flowStatus = $flowStatus;
        return $this;
    }



    /**
     * @return string
     */
    public function getCreateTime(): string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return FlowFinishNotice
     */
    public function setCreateTime(string $createTime): FlowFinishNotice
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return FlowFinishNotice
     */
    public function setEndTime(string $endTime): FlowFinishNotice
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusDescription(): string
    {
        return $this->statusDescription;
    }

    /**
     * @param string $statusDescription
     * @return FlowFinishNotice
     */
    public function setStatusDescription(string $statusDescription): FlowFinishNotice
    {
        $this->statusDescription = $statusDescription;
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
     * @return FlowFinishNotice
     */
    public function setTimestamp(int $timestamp): FlowFinishNotice
    {
        $this->timestamp = $timestamp;
        return $this;
    }

}