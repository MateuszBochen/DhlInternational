<?php

namespace DhlInternational\Lib;

class CreateShipmentDDRequestCustom
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @var ShipmentOrderDDType $ShipmentOrder
     */
    protected $ShipmentOrder = null;

    /**
     * @param Version $Version
     * @param ShipmentOrderDDType $ShipmentOrder
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
     * @return \DhlInternational\Lib\CreateShipmentDDRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return ShipmentOrderDDType
     */
    public function getShipmentOrder()
    {
      return $this->ShipmentOrder;
    }

    /**
     * @param ShipmentOrderDDType $ShipmentOrder
     * @return \DhlInternational\Lib\CreateShipmentDDRequest
     */
    public function setShipmentOrder($ShipmentOrder)
    {
      $this->ShipmentOrder = $ShipmentOrder;
      return $this;
    }

}
