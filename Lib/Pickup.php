<?php

namespace DhlInternational\Lib;

class Pickup
{

    /**
     * @var PickupDetailsType $PickupDetails
     */
    protected $PickupDetails = null;

    /**
     * @var PickupAddressType $PickupAddress
     */
    protected $PickupAddress = null;

    /**
     * @param PickupDetailsType $PickupDetails
     * @param PickupAddressType $PickupAddress
     */
    public function __construct($PickupDetails, $PickupAddress)
    {
      $this->PickupDetails = $PickupDetails;
      $this->PickupAddress = $PickupAddress;
    }

    /**
     * @return PickupDetailsType
     */
    public function getPickupDetails()
    {
      return $this->PickupDetails;
    }

    /**
     * @param PickupDetailsType $PickupDetails
     * @return \DhlInternational\Lib\Pickup
     */
    public function setPickupDetails($PickupDetails)
    {
      $this->PickupDetails = $PickupDetails;
      return $this;
    }

    /**
     * @return PickupAddressType
     */
    public function getPickupAddress()
    {
      return $this->PickupAddress;
    }

    /**
     * @param PickupAddressType $PickupAddress
     * @return \DhlInternational\Lib\Pickup
     */
    public function setPickupAddress($PickupAddress)
    {
      $this->PickupAddress = $PickupAddress;
      return $this;
    }

}
