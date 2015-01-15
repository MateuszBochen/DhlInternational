<?php

namespace DhlInternational\Lib;

class ShipperType
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
     * @var string $VAT
     */
    protected $VAT = null;

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @param string $VAT
     */
    public function __construct($Company, $Address, $Communication, $VAT)
    {
      $this->Company = $Company;
      $this->Address = $Address;
      $this->Communication = $Communication;
      $this->VAT = $VAT;
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
     * @return \DhlInternational\Lib\ShipperType
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
     * @return \DhlInternational\Lib\ShipperType
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
     * @return \DhlInternational\Lib\ShipperType
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
      return $this;
    }

    /**
     * @return string
     */
    public function getVAT()
    {
      return $this->VAT;
    }

    /**
     * @param string $VAT
     * @return \DhlInternational\Lib\ShipperType
     */
    public function setVAT($VAT)
    {
      $this->VAT = $VAT;
      return $this;
    }

}
