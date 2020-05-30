<?php


namespace Jmy\Esign\Request;


use Jmy\Esign\Model\Attachment;
use Jmy\Esign\Model\Copier;
use Jmy\Esign\Model\Document;
use Jmy\Esign\Model\FlowInfo;
use Doctrine\Common\Collections\ArrayCollection;
use Jmy\Esign\Model\Signer;

class FlowRequest implements \JsonSerializable
{

    /**
     * @var $attachments ArrayCollection<Attachment>
     */
    private $attachments;


    /**
     * @var $copiers ArrayCollection<Copier>
     */
    private $copiers;


    /**
     * @var $docs ArrayCollection<Document>
     */
    private $docs;


    /**
     * @var $flowInfo FlowInfo
     */
    private $flowInfo;

    /**
     * @var $signers ArrayCollection<Signer>
     */
    private $signers;


    public function __construct()
    {
        $this->attachments = new ArrayCollection();
        $this->copiers = new ArrayCollection();
        $this->docs = new ArrayCollection();
        $this->signers = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getAttachments(): ArrayCollection
    {
        return $this->attachments;
    }

    /**
     * @param ArrayCollection $attachments
     *
     * @return FlowRequest
     */
    public function setAttachments(ArrayCollection $attachments): FlowRequest
    {
        $this->attachments = $attachments;

        return $this;
    }

    public function addAttachment(Attachment $attachment)
    {
        $this->attachments->add($attachment);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getCopiers(): ArrayCollection
    {
        return $this->copiers;
    }

    /**
     * @param ArrayCollection $copiers
     *
     * @return FlowRequest
     */
    public function setCopiers(ArrayCollection $copiers): FlowRequest
    {
        $this->copiers = $copiers;

        return $this;
    }

    public function addCopier(Copier $copy)
    {
        $this->copiers->add($copy);
        return $this;
    }


    /**
     * @return ArrayCollection
     */
    public function getDocs(): ArrayCollection
    {
        return $this->docs;
    }

    /**
     * @param ArrayCollection $docs
     *
     * @return FlowRequest
     */
    public function setDocs(ArrayCollection $docs): FlowRequest
    {
        $this->docs = $docs;

        return $this;
    }

    public function addDoc(Document $document)
    {
        $this->docs->add($document);
    }

    /**
     * @return FlowInfo
     */
    public function getFlowInfo(): ?FlowInfo
    {
        return $this->flowInfo;
    }

    /**
     * @param FlowInfo $flowInfo
     *
     * @return FlowRequest
     */
    public function setFlowInfo(FlowInfo $flowInfo): FlowRequest
    {
        $this->flowInfo = $flowInfo;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSigners(): ArrayCollection
    {
        return $this->signers;
    }

    /**
     * @param ArrayCollection $signers
     *
     * @return FlowRequest
     */
    public function setSigners(ArrayCollection $signers): FlowRequest
    {
        $this->signers = $signers;

        return $this;
    }


    public function addSigner(Signer $signer)
    {
        $this->signers->add($signer);
        return $this;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'attachments' => $this->getAttachments()->toArray(),
            'copiers' => $this->getCopiers()->toArray(),
            'docs' => $this->getDocs()->toArray(),
            'flowInfo' => $this->getFlowInfo(),
            'signers' => $this->getSigners()->toArray(),
        ]);
    }

}