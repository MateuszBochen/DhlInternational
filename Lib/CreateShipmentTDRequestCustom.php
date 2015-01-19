<?php

namespace DhlInternational\Lib;

class CreateShipmentTDRequestCustom
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @var ShipmentOrderTDType $ShipmentOrder
     */
    protected $ShipmentOrder = null;

    /**
     * @param Version $Version
     * @param ShipmentOrderTDType $ShipmentOrder
     */
    public function __construct($Version = null, $ShipmentOrder = null)
    {
      $this->Version = $Version;
      $this->ShipmentOrder = $ShipmentOrder;
    }

    /**
     * @return Version
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param Version $Version
     * @return \DhlInternational\Lib\CreateShipmentTDRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return ShipmentOrderTDType
     */
    public function getShipmentOrder()
    {
      return $this->ShipmentOrder;
    }

    /**
     * @param ShipmentOrderTDType $ShipmentOrder
     * @return \DhlInternational\Lib\CreateShipmentTDRequest
     */
    public function setShipmentOrder($ShipmentOrder)
    {
      $this->ShipmentOrder = $ShipmentOrder;
      return $this;
    }

}
