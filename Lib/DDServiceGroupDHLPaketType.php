<?php

namespace DhlInternational\Lib;

class DDServiceGroupDHLPaketType
{

    /**
     * @var boolean $Multipack
     */
    protected $Multipack = null;

    /**
     * @var boolean $RegioPacket
     */
    protected $RegioPacket = null;

    /**
     * @var boolean $ParticularDelivery
     */
    protected $ParticularDelivery = null;

    /**
     * @var ShipmentAdvisory $ShipmentAdvisory
     */
    protected $ShipmentAdvisory = null;

    /**
     * @var Endorsement $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @param boolean $Multipack
     * @param boolean $RegioPacket
     * @param boolean $ParticularDelivery
     * @param ShipmentAdvisory $ShipmentAdvisory
     * @param Endorsement $Endorsement
     */
    public function __construct($Multipack, $RegioPacket, $ParticularDelivery, $ShipmentAdvisory, $Endorsement)
    {
      $this->Multipack = $Multipack;
      $this->RegioPacket = $RegioPacket;
      $this->ParticularDelivery = $ParticularDelivery;
      $this->ShipmentAdvisory = $ShipmentAdvisory;
      $this->Endorsement = $Endorsement;
    }

    /**
     * @return boolean
     */
    public function getMultipack()
    {
      return $this->Multipack;
    }

    /**
     * @param boolean $Multipack
     * @return \DhlInternational\Lib\DDServiceGroupDHLPaketType
     */
    public function setMultipack($Multipack)
    {
      $this->Multipack = $Multipack;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRegioPacket()
    {
      return $this->RegioPacket;
    }

    /**
     * @param boolean $RegioPacket
     * @return \DhlInternational\Lib\DDServiceGroupDHLPaketType
     */
    public function setRegioPacket($RegioPacket)
    {
      $this->RegioPacket = $RegioPacket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getParticularDelivery()
    {
      return $this->ParticularDelivery;
    }

    /**
     * @param boolean $ParticularDelivery
     * @return \DhlInternational\Lib\DDServiceGroupDHLPaketType
     */
    public function setParticularDelivery($ParticularDelivery)
    {
      $this->ParticularDelivery = $ParticularDelivery;
      return $this;
    }

    /**
     * @return ShipmentAdvisory
     */
    public function getShipmentAdvisory()
    {
      return $this->ShipmentAdvisory;
    }

    /**
     * @param ShipmentAdvisory $ShipmentAdvisory
     * @return \DhlInternational\Lib\DDServiceGroupDHLPaketType
     */
    public function setShipmentAdvisory($ShipmentAdvisory)
    {
      $this->ShipmentAdvisory = $ShipmentAdvisory;
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
     * @return \DhlInternational\Lib\DDServiceGroupDHLPaketType
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

}
