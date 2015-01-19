<?php

namespace DhlInternational\Lib;

class DoManifestTDRequestCustom
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
     * @param Version $Version
     * @param ShipmentNumberType $ShipmentNumber
     */
    public function __construct($Version = null, $ShipmentNumber = null)
    {
      $this->Version = $Version;
      $this->ShipmentNumber = $ShipmentNumber;
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
     * @return \DhlInternational\Lib\DoManifestTDRequest
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
     * @return \DhlInternational\Lib\DoManifestTDRequest
     */
    public function setShipmentNumber($ShipmentNumber)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      return $this;
    }

}
