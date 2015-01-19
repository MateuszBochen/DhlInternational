<?php

namespace DhlInternational\Lib;

class LabelDataCustom
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
     * @var string $Labelurl
     */
    protected $Labelurl = null;

    /**
     * @var string $XMLLabel
     */
    protected $XMLLabel = null;

    /**
     * @param ShipmentNumberType $ShipmentNumber
     * @param Statusinformation $Status
     * @param string $Labelurl
     * @param string $XMLLabel
     */
    public function __construct($ShipmentNumber = null, $Status = null, $Labelurl = null, $XMLLabel = null)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      $this->Status = $Status;
      $this->Labelurl = $Labelurl;
      $this->XMLLabel = $XMLLabel;
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
     * @return \DhlInternational\Lib\LabelData
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
     * @return \DhlInternational\Lib\LabelData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelurl()
    {
      return $this->Labelurl;
    }

    /**
     * @param string $Labelurl
     * @return \DhlInternational\Lib\LabelData
     */
    public function setLabelurl($Labelurl)
    {
      $this->Labelurl = $Labelurl;
      return $this;
    }

    /**
     * @return string
     */
    public function getXMLLabel()
    {
      return $this->XMLLabel;
    }

    /**
     * @param string $XMLLabel
     * @return \DhlInternational\Lib\LabelData
     */
    public function setXMLLabel($XMLLabel)
    {
      $this->XMLLabel = $XMLLabel;
      return $this;
    }

}
