<?php

namespace DhlInternational\Lib;

class CreationState
{

    /**
     * @var StatusCode $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var StatusMessage $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var SequenceNumber $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var ShipmentNumberType $ShipmentNumber
     */
    protected $ShipmentNumber = null;

    /**
     * @var PieceInformation $PieceInformation
     */
    protected $PieceInformation = null;

    /**
     * @var string $Labelurl
     */
    protected $Labelurl = null;

    /**
     * @var string $XMLLabel
     */
    protected $XMLLabel = null;

    /**
     * @var string $PickupConfirmationNumber
     */
    protected $PickupConfirmationNumber = null;

    /**
     * @param StatusCode $StatusCode
     * @param StatusMessage $StatusMessage
     * @param SequenceNumber $SequenceNumber
     * @param ShipmentNumberType $ShipmentNumber
     * @param PieceInformation $PieceInformation
     * @param string $Labelurl
     * @param string $XMLLabel
     * @param string $PickupConfirmationNumber
     */
    public function __construct($StatusCode, $StatusMessage, $SequenceNumber, $ShipmentNumber, $PieceInformation, $Labelurl, $XMLLabel, $PickupConfirmationNumber)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusMessage = $StatusMessage;
      $this->SequenceNumber = $SequenceNumber;
      $this->ShipmentNumber = $ShipmentNumber;
      $this->PieceInformation = $PieceInformation;
      $this->Labelurl = $Labelurl;
      $this->XMLLabel = $XMLLabel;
      $this->PickupConfirmationNumber = $PickupConfirmationNumber;
    }

    /**
     * @return StatusCode
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param StatusCode $StatusCode
     * @return \DhlInternational\Lib\CreationState
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return StatusMessage
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param StatusMessage $StatusMessage
     * @return \DhlInternational\Lib\CreationState
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

    /**
     * @return SequenceNumber
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param SequenceNumber $SequenceNumber
     * @return \DhlInternational\Lib\CreationState
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
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
     * @return \DhlInternational\Lib\CreationState
     */
    public function setShipmentNumber($ShipmentNumber)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      return $this;
    }

    /**
     * @return PieceInformation
     */
    public function getPieceInformation()
    {
      return $this->PieceInformation;
    }

    /**
     * @param PieceInformation $PieceInformation
     * @return \DhlInternational\Lib\CreationState
     */
    public function setPieceInformation($PieceInformation)
    {
      $this->PieceInformation = $PieceInformation;
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
     * @return \DhlInternational\Lib\CreationState
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
     * @return \DhlInternational\Lib\CreationState
     */
    public function setXMLLabel($XMLLabel)
    {
      $this->XMLLabel = $XMLLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupConfirmationNumber()
    {
      return $this->PickupConfirmationNumber;
    }

    /**
     * @param string $PickupConfirmationNumber
     * @return \DhlInternational\Lib\CreationState
     */
    public function setPickupConfirmationNumber($PickupConfirmationNumber)
    {
      $this->PickupConfirmationNumber = $PickupConfirmationNumber;
      return $this;
    }

}
