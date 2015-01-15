<?php

namespace DhlInternational\Lib;

class ShipmentNumberType
{

    /**
     * @var identCode $identCode
     */
    protected $identCode = null;

    /**
     * @var licensePlate $licensePlate
     */
    protected $licensePlate = null;

    /**
     * @var airwayBill $airwayBill
     */
    protected $airwayBill = null;

    /**
     * @var shipmentNumber $shipmentNumber
     */
    protected $shipmentNumber = null;

    /**
     * @param identCode $identCode
     * @param licensePlate $licensePlate
     * @param airwayBill $airwayBill
     * @param shipmentNumber $shipmentNumber
     */
    public function __construct($identCode, $licensePlate, $airwayBill, $shipmentNumber)
    {
      $this->identCode = $identCode;
      $this->licensePlate = $licensePlate;
      $this->airwayBill = $airwayBill;
      $this->shipmentNumber = $shipmentNumber;
    }

    /**
     * @return identCode
     */
    public function getIdentCode()
    {
      return $this->identCode;
    }

    /**
     * @param identCode $identCode
     * @return \DhlInternational\Lib\ShipmentNumberType
     */
    public function setIdentCode($identCode)
    {
      $this->identCode = $identCode;
      return $this;
    }

    /**
     * @return licensePlate
     */
    public function getLicensePlate()
    {
      return $this->licensePlate;
    }

    /**
     * @param licensePlate $licensePlate
     * @return \DhlInternational\Lib\ShipmentNumberType
     */
    public function setLicensePlate($licensePlate)
    {
      $this->licensePlate = $licensePlate;
      return $this;
    }

    /**
     * @return airwayBill
     */
    public function getAirwayBill()
    {
      return $this->airwayBill;
    }

    /**
     * @param airwayBill $airwayBill
     * @return \DhlInternational\Lib\ShipmentNumberType
     */
    public function setAirwayBill($airwayBill)
    {
      $this->airwayBill = $airwayBill;
      return $this;
    }

    /**
     * @return shipmentNumber
     */
    public function getShipmentNumber()
    {
      return $this->shipmentNumber;
    }

    /**
     * @param shipmentNumber $shipmentNumber
     * @return \DhlInternational\Lib\ShipmentNumberType
     */
    public function setShipmentNumber($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
      return $this;
    }

}
