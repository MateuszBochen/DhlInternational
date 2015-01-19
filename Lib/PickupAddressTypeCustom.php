<?php

namespace DhlInternational\Lib;

class PickupAddressTypeCustom
{

    /**
     * @var NameType $Company
     */
    protected $Company = null;

    /**
     * @var NativeAddressType $Address
     */
    protected $Address = null;

    /**
     * @var CommunicationType $Communication
     */
    protected $Communication = null;

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     */
    public function __construct($Company = null, $Address = null, $Communication = null)
    {
      $this->Company = $Company;
      $this->Address = $Address;
      $this->Communication = $Communication;
    }

    /**
     * @return NameType
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param NameType $Company
     * @return \DhlInternational\Lib\PickupAddressType
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return NativeAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param NativeAddressType $Address
     * @return \DhlInternational\Lib\PickupAddressType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return CommunicationType
     */
    public function getCommunication()
    {
      return $this->Communication;
    }

    /**
     * @param CommunicationType $Communication
     * @return \DhlInternational\Lib\PickupAddressType
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
      return $this;
    }

}
