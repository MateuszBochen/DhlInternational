<?php

namespace DhlInternational\Lib;

class ShipmentOrderDDTypeCustom
{

    /**
     * @var SequenceNumber $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var Shipment $Shipment
     */
    protected $Shipment = null;

    /**
     * @var Pickup $Pickup
     */
    protected $Pickup = null;

    /**
     * @var LabelResponseType $LabelResponseType
     */
    protected $LabelResponseType = null;

    /**
     * @var PRINTONLYIFCODEABLE $PRINTONLYIFCODEABLE
     */
    protected $PRINTONLYIFCODEABLE = null;

    /**
     * @param SequenceNumber $SequenceNumber
     * @param Shipment $Shipment
     * @param Pickup $Pickup
     * @param LabelResponseType $LabelResponseType
     * @param PRINTONLYIFCODEABLE $PRINTONLYIFCODEABLE
     */
    public function __construct($SequenceNumber = null, $Shipment = null, $Pickup = null, $LabelResponseType = null, $PRINTONLYIFCODEABLE = null)
    {
      $this->SequenceNumber = $SequenceNumber;
      $this->Shipment = $Shipment;
      $this->Pickup = $Pickup;
      $this->LabelResponseType = $LabelResponseType;
      $this->PRINTONLYIFCODEABLE = $PRINTONLYIFCODEABLE;
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
     * @return \DhlInternational\Lib\ShipmentOrderDDType
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipment()
    {
      return $this->Shipment;
    }

    /**
     * @param Shipment $Shipment
     * @return \DhlInternational\Lib\ShipmentOrderDDType
     */
    public function setShipment($Shipment)
    {
      $this->Shipment = $Shipment;
      return $this;
    }

    /**
     * @return Pickup
     */
    public function getPickup()
    {
      return $this->Pickup;
    }

    /**
     * @param Pickup $Pickup
     * @return \DhlInternational\Lib\ShipmentOrderDDType
     */
    public function setPickup($Pickup)
    {
      $this->Pickup = $Pickup;
      return $this;
    }

    /**
     * @return LabelResponseType
     */
    public function getLabelResponseType()
    {
      return $this->LabelResponseType;
    }

    /**
     * @param LabelResponseType $LabelResponseType
     * @return \DhlInternational\Lib\ShipmentOrderDDType
     */
    public function setLabelResponseType($LabelResponseType)
    {
      $this->LabelResponseType = $LabelResponseType;
      return $this;
    }

    /**
     * @return PRINTONLYIFCODEABLE
     */
    public function getPRINTONLYIFCODEABLE()
    {
      return $this->PRINTONLYIFCODEABLE;
    }

    /**
     * @param PRINTONLYIFCODEABLE $PRINTONLYIFCODEABLE
     * @return \DhlInternational\Lib\ShipmentOrderDDType
     */
    public function setPRINTONLYIFCODEABLE($PRINTONLYIFCODEABLE)
    {
      $this->PRINTONLYIFCODEABLE = $PRINTONLYIFCODEABLE;
      return $this;
    }

}
