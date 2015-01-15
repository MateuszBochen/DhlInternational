<?php

namespace DhlInternational\Lib;

class DDServiceGroupBusinessPackInternationalType
{

    /**
     * @var boolean $Economy
     */
    protected $Economy = null;

    /**
     * @var boolean $Premium
     */
    protected $Premium = null;

    /**
     * @var boolean $Seapacket
     */
    protected $Seapacket = null;

    /**
     * @var boolean $CoilWithoutHelp
     */
    protected $CoilWithoutHelp = null;

    /**
     * @var Endorsement $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @var boolean $AmountInternational
     */
    protected $AmountInternational = null;

    /**
     * @param boolean $Economy
     * @param boolean $Premium
     * @param boolean $Seapacket
     * @param boolean $CoilWithoutHelp
     * @param Endorsement $Endorsement
     * @param boolean $AmountInternational
     */
    public function __construct($Economy, $Premium, $Seapacket, $CoilWithoutHelp, $Endorsement, $AmountInternational)
    {
      $this->Economy = $Economy;
      $this->Premium = $Premium;
      $this->Seapacket = $Seapacket;
      $this->CoilWithoutHelp = $CoilWithoutHelp;
      $this->Endorsement = $Endorsement;
      $this->AmountInternational = $AmountInternational;
    }

    /**
     * @return boolean
     */
    public function getEconomy()
    {
      return $this->Economy;
    }

    /**
     * @param boolean $Economy
     * @return \DhlInternational\Lib\DDServiceGroupBusinessPackInternationalType
     */
    public function setEconomy($Economy)
    {
      $this->Economy = $Economy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPremium()
    {
      return $this->Premium;
    }

    /**
     * @param boolean $Premium
     * @return \DhlInternational\Lib\DDServiceGroupBusinessPackInternationalType
     */
    public function setPremium($Premium)
    {
      $this->Premium = $Premium;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSeapacket()
    {
      return $this->Seapacket;
    }

    /**
     * @param boolean $Seapacket
     * @return \DhlInternational\Lib\DDServiceGroupBusinessPackInternationalType
     */
    public function setSeapacket($Seapacket)
    {
      $this->Seapacket = $Seapacket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCoilWithoutHelp()
    {
      return $this->CoilWithoutHelp;
    }

    /**
     * @param boolean $CoilWithoutHelp
     * @return \DhlInternational\Lib\DDServiceGroupBusinessPackInternationalType
     */
    public function setCoilWithoutHelp($CoilWithoutHelp)
    {
      $this->CoilWithoutHelp = $CoilWithoutHelp;
      return $this;
    }

    /**
     * @return Endorsement
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param Endorsement $Endorsement
     * @return \DhlInternational\Lib\DDServiceGroupBusinessPackInternationalType
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAmountInternational()
    {
      return $this->AmountInternational;
    }

    /**
     * @param boolean $AmountInternational
     * @return \DhlInternational\Lib\DDServiceGroupBusinessPackInternationalType
     */
    public function setAmountInternational($AmountInternational)
    {
      $this->AmountInternational = $AmountInternational;
      return $this;
    }

}
