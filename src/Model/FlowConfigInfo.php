<?php


namespace Jmy\Esign\Model;


class FlowConfigInfo implements \JsonSerializable
{

    CONST NOTICE_TYPE_SMS = 1;

    CONST NOTICE_TYPE_EMAIL = 2;

    CONST SIGN_PLATFORM_H5 = 1;

    CONST SIGN_PLATFORM_ALIPAY = 2;

    /**
     * @var $noticeDeveloperUrl string | null
     */
    private $noticeDeveloperUrl;

    /**
     * @var $noticeType string | null
     */
    private $noticeType;

    /**
     * @var $redirectUrl string | null
     */
    private $redirectUrl;

    /**
     * @var $signPlatform string | null
     */
    private $signPlatform;

    /**
     * @return string|null
     */
    public function getNoticeDeveloperUrl(): ?string
    {
        return $this->noticeDeveloperUrl;
    }

    /**
     * @param string|null $noticeDeveloperUrl
     * @return FlowConfigInfo
     */
    public function setNoticeDeveloperUrl(?string $noticeDeveloperUrl): FlowConfigInfo
    {
        $this->noticeDeveloperUrl = $noticeDeveloperUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNoticeType(): ?string
    {
        return $this->noticeType;
    }

    /**
     * @param string|null $noticeType
     * @return FlowConfigInfo
     */
    public function setNoticeType(?string $noticeType): FlowConfigInfo
    {
        $this->noticeType = $noticeType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    /**
     * @param string|null $redirectUrl
     * @return FlowConfigInfo
     */
    public function setRedirectUrl(?string $redirectUrl): FlowConfigInfo
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignPlatform(): ?string
    {
        return $this->signPlatform;
    }

    /**
     * @param string|null $signPlatform
     * @return FlowConfigInfo
     */
    public function setSignPlatform(?string $signPlatform): FlowConfigInfo
    {
        $this->signPlatform = $signPlatform;
        return $this;
    }


    public function jsonSerialize()
    {
        return [
            'noticeDeveloperUrl' => $this->getNoticeDeveloperUrl(),
            'noticeType' => $this->getNoticeType(),
            'redirectUrl' => $this->getRedirectUrl(),
            'signPlatform' => $this->getSignPlatform()
        ];
    }


}