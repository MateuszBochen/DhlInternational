<?php

namespace DhlInternational\Lib;

class CustomerTypeCustom
{

    /**
     * @var NameType $Name
     */
    protected $Name = null;

    /**
     * @var string $vatID
     */
    protected $vatID = null;

    /**
     * @var EKP $EKP
     */
    protected $EKP = null;

    /**
     * @var NativeAddressType $Address
     */
    protected $Address = null;

    /**
     * @var ContactType $Contact
     */
    protected $Contact = null;

    /**
     * @var BankType $Bank
     */
    protected $Bank = null;

    /**
     * @var anyType $note
     */
    protected $note = null;

    /**
     * @param NameType $Name
     * @param string $vatID
     * @param EKP $EKP
     * @param NativeAddressType $Address
     * @param ContactType $Contact
     * @param BankType $Bank
     * @param anyType $note
     */
    public function __construct($Name = null, $vatID = null, $EKP = null, $Address = null, $Contact = null, $Bank = null, $note = null)
    {
      $this->Name = $Name;
      $this->vatID = $vatID;
      $this->EKP = $EKP;
      $this->Address = $Address;
      $this->Contact = $Contact;
      $this->Bank = $Bank;
      $this->note = $note;
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
     * @return \DhlInternational\Lib\CustomerType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatID()
    {
      return $this->vatID;
    }

    /**
     * @param string $vatID
     * @return \DhlInternational\Lib\CustomerType
     */
    public function setVatID($vatID)
    {
      $this->vatID = $vatID;
      return $this;
    }

    /**
     * @return EKP
     */
    public function getEKP()
    {
      return $this->EKP;
    }

    /**
     * @param EKP $EKP
     * @return \DhlInternational\Lib\CustomerType
     */
    public function setEKP($EKP)
    {
      $this->EKP = $EKP;
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
     * @return \DhlInternational\Lib\CustomerType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return ContactType
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param ContactType $Contact
     * @return \DhlInternational\Lib\CustomerType
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return BankType
     */
    public function getBank()
    {
      return $this->Bank;
    }

    /**
     * @param BankType $Bank
     * @return \DhlInternational\Lib\CustomerType
     */
    public function setBank($Bank)
    {
      $this->Bank = $Bank;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param anyType $note
     * @return \DhlInternational\Lib\CustomerType
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

}
