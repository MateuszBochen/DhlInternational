<?php

namespace DhlInternational\Lib;

class ContractSubmissionCustom
{

    /**
     * @var TotalPages $TotalPages
     */
    protected $TotalPages = null;

    /**
     * @var TotalSignatures $TotalSignatures
     */
    protected $TotalSignatures = null;

    /**
     * @var TotalDocsSender $TotalDocsSender
     */
    protected $TotalDocsSender = null;

    /**
     * @var TotalDocsReceiver $TotalDocsReceiver
     */
    protected $TotalDocsReceiver = null;

    /**
     * @param TotalPages $TotalPages
     * @param TotalSignatures $TotalSignatures
     * @param TotalDocsSender $TotalDocsSender
     * @param TotalDocsReceiver $TotalDocsReceiver
     */
    public function __construct($TotalPages = null, $TotalSignatures = null, $TotalDocsSender = null, $TotalDocsReceiver = null)
    {
      $this->TotalPages = $TotalPages;
      $this->TotalSignatures = $TotalSignatures;
      $this->TotalDocsSender = $TotalDocsSender;
      $this->TotalDocsReceiver = $TotalDocsReceiver;
    }

    /**
     * @return TotalPages
     */
    public function getTotalPages()
    {
      return $this->TotalPages;
    }

    /**
     * @param TotalPages $TotalPages
     * @return \DhlInternational\Lib\ContractSubmission
     */
    public function setTotalPages($TotalPages)
    {
      $this->TotalPages = $TotalPages;
      return $this;
    }

    /**
     * @return TotalSignatures
     */
    public function getTotalSignatures()
    {
      return $this->TotalSignatures;
    }

    /**
     * @param TotalSignatures $TotalSignatures
     * @return \DhlInternational\Lib\ContractSubmission
     */
    public function setTotalSignatures($TotalSignatures)
    {
      $this->TotalSignatures = $TotalSignatures;
      return $this;
    }

    /**
     * @return TotalDocsSender
     */
    public function getTotalDocsSender()
    {
      return $this->TotalDocsSender;
    }

    /**
     * @param TotalDocsSender $TotalDocsSender
     * @return \DhlInternational\Lib\ContractSubmission
     */
    public function setTotalDocsSender($TotalDocsSender)
    {
      $this->TotalDocsSender = $TotalDocsSender;
      return $this;
    }

    /**
     * @return TotalDocsReceiver
     */
    public function getTotalDocsReceiver()
    {
      return $this->TotalDocsReceiver;
    }

    /**
     * @param TotalDocsReceiver $TotalDocsReceiver
     * @return \DhlInternational\Lib\ContractSubmission
     */
    public function setTotalDocsReceiver($TotalDocsReceiver)
    {
      $this->TotalDocsReceiver = $TotalDocsReceiver;
      return $this;
    }

}
