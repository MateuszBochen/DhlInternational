<?php

namespace DhlInternational\Lib;

class ManifestStateCustom
{

    /**
     * @var ShipmentNumberType $ShipmentNumber
     */
    protected $ShipmentNumber = null;

    /**
     * @var Statusinformation $Status
     */
    protected $Status = null;

    /**
     * @param ShipmentNumberType $ShipmentNumber
     * @param Statusinformation $Status
     */
    public function __construct($ShipmentNumber = null, $Status = null)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      $this->Status = $Status;
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
     * @return \DhlInternational\Lib\ManifestState
     */
    public function setShipmentNumber($ShipmentNumber)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      return $this;
    }

    /**
     * @return Statusinformation
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Statusinformation $Status
     * @return \DhlInternational\Lib\ManifestState
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
