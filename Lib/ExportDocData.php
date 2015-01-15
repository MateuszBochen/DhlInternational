<?php

namespace DhlInternational\Lib;

class ExportDocData
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
     * @var string $ExportDocPDFData
     */
    protected $ExportDocPDFData = null;

    /**
     * @var string $ExportDocURL
     */
    protected $ExportDocURL = null;

    /**
     * @param ShipmentNumberType $ShipmentNumber
     * @param Statusinformation $Status
     * @param string $ExportDocPDFData
     * @param string $ExportDocURL
     */
    public function __construct($ShipmentNumber, $Status, $ExportDocPDFData, $ExportDocURL)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      $this->Status = $Status;
      $this->ExportDocPDFData = $ExportDocPDFData;
      $this->ExportDocURL = $ExportDocURL;
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
     * @return \DhlInternational\Lib\ExportDocData
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
     * @return \DhlInternational\Lib\ExportDocData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportDocPDFData()
    {
      return $this->ExportDocPDFData;
    }

    /**
     * @param string $ExportDocPDFData
     * @return \DhlInternational\Lib\ExportDocData
     */
    public function setExportDocPDFData($ExportDocPDFData)
    {
      $this->ExportDocPDFData = $ExportDocPDFData;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportDocURL()
    {
      return $this->ExportDocURL;
    }

    /**
     * @param string $ExportDocURL
     * @return \DhlInternational\Lib\ExportDocData
     */
    public function setExportDocURL($ExportDocURL)
    {
      $this->ExportDocURL = $ExportDocURL;
      return $this;
    }

}
