<?php

namespace DhlInternational\Lib;

class ShipmentServiceDD
{

    /**
     * @var DDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     */
    protected $ServiceGroupDateTimeOption = null;

    /**
     * @var DDShipmentServiceGroupIdentType $ShipmentServiceGroupIdent
     */
    protected $ShipmentServiceGroupIdent = null;

    /**
     * @var DDShipmentServiceGroupPickupType $ShipmentServiceGroupPickup
     */
    protected $ShipmentServiceGroupPickup = null;

    /**
     * @var DDServiceGroupBusinessPackInternationalType $ServiceGroupBusinessPackInternational
     */
    protected $ServiceGroupBusinessPackInternational = null;

    /**
     * @var DDServiceGroupDHLPaketType $ServiceGroupDHLPaket
     */
    protected $ServiceGroupDHLPaket = null;

    /**
     * @var DDServiceGroupOtherType $ServiceGroupOther
     */
    protected $ServiceGroupOther = null;

    /**
     * @param DDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     * @param DDShipmentServiceGroupIdentType $ShipmentServiceGroupIdent
     * @param DDShipmentServiceGroupPickupType $ShipmentServiceGroupPickup
     * @param DDServiceGroupBusinessPackInternationalType $ServiceGroupBusinessPackInternational
     * @param DDServiceGroupDHLPaketType $ServiceGroupDHLPaket
     * @param DDServiceGroupOtherType $ServiceGroupOther
     */
    public function __construct($ServiceGroupDateTimeOption, $ShipmentServiceGroupIdent, $ShipmentServiceGroupPickup, $ServiceGroupBusinessPackInternational, $ServiceGroupDHLPaket, $ServiceGroupOther)
    {
      $this->ServiceGroupDateTimeOption = $ServiceGroupDateTimeOption;
      $this->ShipmentServiceGroupIdent = $ShipmentServiceGroupIdent;
      $this->ShipmentServiceGroupPickup = $ShipmentServiceGroupPickup;
      $this->ServiceGroupBusinessPackInternational = $ServiceGroupBusinessPackInternational;
      $this->ServiceGroupDHLPaket = $ServiceGroupDHLPaket;
      $this->ServiceGroupOther = $ServiceGroupOther;
    }

    /**
     * @return DDServiceGroupDateTimeOptionType
     */
    public function getServiceGroupDateTimeOption()
    {
      return $this->ServiceGroupDateTimeOption;
    }

    /**
     * @param DDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     * @return \DhlInternational\Lib\ShipmentServiceDD
     */
    public function setServiceGroupDateTimeOption($ServiceGroupDateTimeOption)
    {
      $this->ServiceGroupDateTimeOption = $ServiceGroupDateTimeOption;
      return $this;
    }

    /**
     * @return DDShipmentServiceGroupIdentType
     */
    public function getShipmentServiceGroupIdent()
    {
      return $this->ShipmentServiceGroupIdent;
    }

    /**
     * @param DDShipmentServiceGroupIdentType $ShipmentServiceGroupIdent
     * @return \DhlInternational\Lib\ShipmentServiceDD
     */
    public function setShipmentServiceGroupIdent($ShipmentServiceGroupIdent)
    {
      $this->ShipmentServiceGroupIdent = $ShipmentServiceGroupIdent;
      return $this;
    }

    /**
     * @return DDShipmentServiceGroupPickupType
     */
    public function getShipmentServiceGroupPickup()
    {
      return $this->ShipmentServiceGroupPickup;
    }

    /**
     * @param DDShipmentServiceGroupPickupType $ShipmentServiceGroupPickup
     * @return \DhlInternational\Lib\ShipmentServiceDD
     */
    public function setShipmentServiceGroupPickup($ShipmentServiceGroupPickup)
    {
      $this->ShipmentServiceGroupPickup = $ShipmentServiceGroupPickup;
      return $this;
    }

    /**
     * @return DDServiceGroupBusinessPackInternationalType
     */
    public function getServiceGroupBusinessPackInternational()
    {
      return $this->ServiceGroupBusinessPackInternational;
    }

    /**
     * @param DDServiceGroupBusinessPackInternationalType $ServiceGroupBusinessPackInternational
     * @return \DhlInternational\Lib\ShipmentServiceDD
     */
    public function setServiceGroupBusinessPackInternational($ServiceGroupBusinessPackInternational)
    {
      $this->ServiceGroupBusinessPackInternational = $ServiceGroupBusinessPackInternational;
      return $this;
    }

    /**
     * @return DDServiceGroupDHLPaketType
     */
    public function getServiceGroupDHLPaket()
    {
      return $this->ServiceGroupDHLPaket;
    }

    /**
     * @param DDServiceGroupDHLPaketType $ServiceGroupDHLPaket
     * @return \DhlInternational\Lib\ShipmentServiceDD
     */
    public function setServiceGroupDHLPaket($ServiceGroupDHLPaket)
    {
      $this->ServiceGroupDHLPaket = $ServiceGroupDHLPaket;
      return $this;
    }

    /**
     * @return DDServiceGroupOtherType
     */
    public function getServiceGroupOther()
    {
      return $this->ServiceGroupOther;
    }

    /**
     * @param DDServiceGroupOtherType $ServiceGroupOther
     * @return \DhlInternational\Lib\ShipmentServiceDD
     */
    public function setServiceGroupOther($ServiceGroupOther)
    {
      $this->ServiceGroupOther = $ServiceGroupOther;
      return $this;
    }

}
