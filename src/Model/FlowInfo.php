<?php


namespace Jmy\Esign\Model;


class FlowInfo implements \JsonSerializable
{
    /**
     * @var $autoArchive boolean | null
     */
    private $autoArchive;

    /**
     * @var $autoInitiate boolean | null
     */
    private $autoInitiate;

    /**
     * @var string
     */
    private $businessScene;

    /**
     * @var integer | null
     */
    private $contractRemind;

    /**
     * @var integer | null
     */
    private $contractValidity;

    /**
     * @var $initiatorAccountId string | null
     */
    private $initiatorAccountId;

    /**
     * @var $initiatorAuthorizedAccountId string | null
     */
    private $initiatorAuthorizedAccountId;

    /**
     * @var $remark string | null
     */
    private $remark;

    /**
     * @var $signValidity string | null
     */
    private $signValidity;


    /**
     * @var $flowConfigInfo FlowConfigInfo
     */
    private $flowConfigInfo;


    public function __construct()
    {
        $this->autoArchive = false;
        $this->autoInitiate = false;
    }

    /**
     * @return bool|null
     */
    public function getAutoArchive(): ?bool
    {
        return $this->autoArchive;
    }

    /**
     * @param bool|null $autoArchive
     * @return FlowInfo
     */
    public function setAutoArchive(?bool $autoArchive): FlowInfo
    {
        $this->autoArchive = $autoArchive;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAutoInitiate(): ?bool
    {
        return $this->autoInitiate;
    }

    /**
     * @param bool|null $autoInitiate
     * @return FlowInfo
     */
    public function setAutoInitiate(?bool $autoInitiate): FlowInfo
    {
        $this->autoInitiate = $autoInitiate;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessScene(): string
    {
        return $this->businessScene;
    }

    /**
     * @param string $businessScene
     * @return FlowInfo
     */
    public function setBusinessScene(string $businessScene): FlowInfo
    {
        $this->businessScene = $businessScene;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getContractRemind(): ?int
    {
        return $this->contractRemind;
    }

    /**
     * @param int|null $contractRemind
     * @return FlowInfo
     */
    public function setContractRemind(?int $contractRemind): FlowInfo
    {
        $this->contractRemind = $contractRemind;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getContractValidity(): ?int
    {
        return $this->contractValidity;
    }

    /**
     * @param int|null $contractValidity
     * @return FlowInfo
     */
    public function setContractValidity(?int $contractValidity): FlowInfo
    {
        $this->contractValidity = $contractValidity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInitiatorAccountId(): ?string
    {
        return $this->initiatorAccountId;
    }

    /**
     * @param string|null $initiatorAccountId
     * @return FlowInfo
     */
    public function setInitiatorAccountId(?string $initiatorAccountId): FlowInfo
    {
        $this->initiatorAccountId = $initiatorAccountId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInitiatorAuthorizedAccountId(): ?string
    {
        return $this->initiatorAuthorizedAccountId;
    }

    /**
     * @param string|null $initiatorAuthorizedAccountId
     * @return FlowInfo
     */
    public function setInitiatorAuthorizedAccountId(?string $initiatorAuthorizedAccountId): FlowInfo
    {
        $this->initiatorAuthorizedAccountId = $initiatorAuthorizedAccountId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string|null $remark
     * @return FlowInfo
     */
    public function setRemark(?string $remark): FlowInfo
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignValidity(): ?string
    {
        return $this->signValidity;
    }

    /**
     * @param string|null $signValidity
     * @return FlowInfo
     */
    public function setSignValidity(?string $signValidity): FlowInfo
    {
        $this->signValidity = $signValidity;
        return $this;
    }

    /**
     * @return FlowConfigInfo
     */
    public function getFlowConfigInfo():? FlowConfigInfo
    {
        return $this->flowConfigInfo;
    }

    /**
     * @param FlowConfigInfo $flowConfigInfo
     * @return FlowInfo
     */
    public function setFlowConfigInfo(FlowConfigInfo $flowConfigInfo): FlowInfo
    {
        $this->flowConfigInfo = $flowConfigInfo;
        return $this;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'autoArchive' => $this->getAutoArchive(),
            'autoInitiate' => $this->getAutoInitiate(),
            'businessScene' => $this->getBusinessScene(),
            'contractRemind' => $this->getContractRemind(),
            'contractValidity' => $this->getContractValidity(),
            'initiatorAccountId' => $this->getInitiatorAccountId(),
            'initiatorAuthorizedAccountId' => $this->getInitiatorAuthorizedAccountId(),
            'remark' => $this->getRemark(),
            'signValidity' => $this->getSignValidity(),
//            'flowConfigInfo' => $this->getFlowConfigInfo(),
            'flowConfigInfo' => $this->getFlowConfigInfo()
        ]);
    }
}