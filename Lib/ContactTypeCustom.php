<?php

namespace DhlInternational\Lib;

class ContactTypeCustom
{

    /**
     * @var CommunicationType $Communication
     */
    protected $Communication = null;

    /**
     * @var NativeAddressType $Address
     */
    protected $Address = null;

    /**
     * @var NameType $Name
     */
    protected $Name = null;

    /**
     * @param CommunicationType $Communication
     * @param NativeAddressType $Address
     * @param NameType $Name
     */
    public function __construct($Communication = null, $Address = null, $Name = null)
    {
      $this->Communication = $Communication;
      $this->Address = $Address;
      $this->Name = $Name;
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
     * @return \DhlInternational\Lib\ContactType
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
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
     * @return \DhlInternational\Lib\ContactType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return NameType
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param NameType $Name
     * @return \DhlInternational\Lib\ContactType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
