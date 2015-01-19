<?php

namespace DhlInternational\Lib;

class DDShipmentServiceGroupIdentTypeCustom
{

    /**
     * @var Ident $Ident
     */
    protected $Ident = null;

    /**
     * @var IdentExtra $IdentExtra
     */
    protected $IdentExtra = null;

    /**
     * @var IdentPremium $IdentPremium
     */
    protected $IdentPremium = null;

    /**
     * @var boolean $Personally
     */
    protected $Personally = null;

    /**
     * @var boolean $ReturnReceipt
     */
    protected $ReturnReceipt = null;

    /**
     * @var boolean $ProofOfDelivery
     */
    protected $ProofOfDelivery = null;

    /**
     * @var ContractSubmission $ContractSubmission
     */
    protected $ContractSubmission = null;

    /**
     * @var SMSAviso $SMSAviso
     */
    protected $SMSAviso = null;

    /**
     * @var CheckMinimumAge $CheckMinimumAge
     */
    protected $CheckMinimumAge = null;

    /**
     * @param Ident $Ident
     * @param IdentExtra $IdentExtra
     * @param IdentPremium $IdentPremium
     * @param boolean $Personally
     * @param boolean $ReturnReceipt
     * @param boolean $ProofOfDelivery
     * @param ContractSubmission $ContractSubmission
     * @param SMSAviso $SMSAviso
     * @param CheckMinimumAge $CheckMinimumAge
     */
    public function __construct($Ident = null, $IdentExtra = null, $IdentPremium = null, $Personally = null, $ReturnReceipt = null, $ProofOfDelivery = null, $ContractSubmission = null, $SMSAviso = null, $CheckMinimumAge = null)
    {
      $this->Ident = $Ident;
      $this->IdentExtra = $IdentExtra;
      $this->IdentPremium = $IdentPremium;
      $this->Personally = $Personally;
      $this->ReturnReceipt = $ReturnReceipt;
      $this->ProofOfDelivery = $ProofOfDelivery;
      $this->ContractSubmission = $ContractSubmission;
      $this->SMSAviso = $SMSAviso;
      $this->CheckMinimumAge = $CheckMinimumAge;
    }

    /**
     * @return Ident
     */
    public function getIdent()
    {
      return $this->Ident;
    }

    /**
     * @param Ident $Ident
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setIdent($Ident)
    {
      $this->Ident = $Ident;
      return $this;
    }

    /**
     * @return IdentExtra
     */
    public function getIdentExtra()
    {
      return $this->IdentExtra;
    }

    /**
     * @param IdentExtra $IdentExtra
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setIdentExtra($IdentExtra)
    {
      $this->IdentExtra = $IdentExtra;
      return $this;
    }

    /**
     * @return IdentPremium
     */
    public function getIdentPremium()
    {
      return $this->IdentPremium;
    }

    /**
     * @param IdentPremium $IdentPremium
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setIdentPremium($IdentPremium)
    {
      $this->IdentPremium = $IdentPremium;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonally()
    {
      return $this->Personally;
    }

    /**
     * @param boolean $Personally
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setPersonally($Personally)
    {
      $this->Personally = $Personally;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnReceipt()
    {
      return $this->ReturnReceipt;
    }

    /**
     * @param boolean $ReturnReceipt
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setReturnReceipt($ReturnReceipt)
    {
      $this->ReturnReceipt = $ReturnReceipt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProofOfDelivery()
    {
      return $this->ProofOfDelivery;
    }

    /**
     * @param boolean $ProofOfDelivery
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setProofOfDelivery($ProofOfDelivery)
    {
      $this->ProofOfDelivery = $ProofOfDelivery;
      return $this;
    }

    /**
     * @return ContractSubmission
     */
    public function getContractSubmission()
    {
      return $this->ContractSubmission;
    }

    /**
     * @param ContractSubmission $ContractSubmission
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setContractSubmission($ContractSubmission)
    {
      $this->ContractSubmission = $ContractSubmission;
      return $this;
    }

    /**
     * @return SMSAviso
     */
    public function getSMSAviso()
    {
      return $this->SMSAviso;
    }

    /**
     * @param SMSAviso $SMSAviso
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setSMSAviso($SMSAviso)
    {
      $this->SMSAviso = $SMSAviso;
      return $this;
    }

    /**
     * @return CheckMinimumAge
     */
    public function getCheckMinimumAge()
    {
      return $this->CheckMinimumAge;
    }

    /**
     * @param CheckMinimumAge $CheckMinimumAge
     * @return \DhlInternational\Lib\DDShipmentServiceGroupIdentType
     */
    public function setCheckMinimumAge($CheckMinimumAge)
    {
      $this->CheckMinimumAge = $CheckMinimumAge;
      return $this;
    }

}
