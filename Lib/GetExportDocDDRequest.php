<?php

namespace DhlInternational\Lib;

class GetExportDocDDRequest
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
     * @var DocType $DocType
     */
    protected $DocType = null;

    /**
     * @param Version $Version
     * @param ShipmentNumberType $ShipmentNumber
     * @param DocType $DocType
     */
    public function __construct($Version, $ShipmentNumber, $DocType)
    {
      $this->Version = $Version;
      $this->ShipmentNumber = $ShipmentNumber;
      $this->DocType = $DocType;
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
     * @return \DhlInternational\Lib\GetExportDocDDRequest
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
     * @return \DhlInternational\Lib\GetExportDocDDRequest
     */
    public function setShipmentNumber($ShipmentNumber)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      return $this;
    }

    /**
     * @return DocType
     */
    public function getDocType()
    {
      return $this->DocType;
    }

    /**
     * @param DocType $DocType
     * @return \DhlInternational\Lib\GetExportDocDDRequest
     */
    public function setDocType($DocType)
    {
      $this->DocType = $DocType;
      return $this;
    }

}
