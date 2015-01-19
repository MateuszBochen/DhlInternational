<?php

namespace DhlInternational\Lib;

class DeliveryAdressCustom
{

    /**
     * @var NameType $Company
     */
    protected $Company = null;

    /**
     * @var string $Name3
     */
    protected $Name3 = null;

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
     * @param string $Name3
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     */
    public function __construct($Company = null, $Name3 = null, $Address = null, $Communication = null)
    {
      $this->Company = $Company;
      $this->Name3 = $Name3;
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
     * @return \DhlInternational\Lib\DeliveryAdress
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getName3()
    {
      return $this->Name3;
    }

    /**
     * @param string $Name3
     * @return \DhlInternational\Lib\DeliveryAdress
     */
    public function setName3($Name3)
    {
      $this->Name3 = $Name3;
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
     * @return \DhlInternational\Lib\DeliveryAdress
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
     * @return \DhlInternational\Lib\DeliveryAdress
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
      return $this;
    }

}
