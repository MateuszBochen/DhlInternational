<?php

namespace DhlInternational\Lib;

class UpdateShipmentDDRequest
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @var ShipmentNumberType $ShipmentNumber
     */
    protected $ShipmentNumber = null;

    /**
     * @var ShipmentOrderDDType $ShipmentOrder
     */
    protected $ShipmentOrder = null;

    /**
     * @param Version $Version
     * @param ShipmentNumberType $ShipmentNumber
     * @param ShipmentOrderDDType $ShipmentOrder
     */
    public function __construct($Version, $ShipmentNumber, $ShipmentOrder)
    {
      $this->Version = $Version;
      $this->ShipmentNumber = $ShipmentNumber;
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
     * @return \DhlInternational\Lib\UpdateShipmentDDRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return ShipmentNumberType
     */
    public function getShipmentNumber()
    {
      return $this->ShipmentNumber;
    }

    /**
     * @param ShipmentNumberType $ShipmentNumber
     * @return \DhlInternational\Lib\UpdateShipmentDDRequest
     */
    public function setShipmentNumber($ShipmentNumber)
    {
      $this->ShipmentNumber = $ShipmentNumber;
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
     * @return \DhlInternational\Lib\UpdateShipmentDDRequest
     */
    public function setShipmentOrder($ShipmentOrder)
    {
      $this->ShipmentOrder = $ShipmentOrder;
      return $this;
    }

}
