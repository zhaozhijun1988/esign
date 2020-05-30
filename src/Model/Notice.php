<?php


namespace Jmy\Esign\Model;


class Notice
{

    CONST ACTION_SIGN_FLOW_FINISH = 'SIGN_FLOW_FINISH';

    CONST ACTION_SIGN_FLOW_UPDATE = 'SIGN_FLOW_UPDATE';

    CONST ACTION_SIGN_DOC_EXPIRE_REMIND = 'SIGN_DOC_EXPIRE_REMIND';

    CONST ACTION_SIGN_DOC_EXPIRE = 'SIGN_DOC_EXPIRE';

    /**
     * @var $action string
     */
    private $action;

    /**
     * @var $flowId string
     */
    private $flowId;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return Notice
     */
    public function setAction(string $action): Notice
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlowId(): string
    {
        return $this->flowId;
    }

    /**
     * @param string $flowId
     * @return Notice
     */
    public function setFlowId(string $flowId): Notice
    {
        $this->flowId = $flowId;
        return $this;
    }


}