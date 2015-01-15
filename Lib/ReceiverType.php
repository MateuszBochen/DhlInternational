<?php

namespace DhlInternational\Lib;

class ReceiverType
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
     * @var PackstationType $Packstation
     */
    protected $Packstation = null;

    /**
     * @var PostfilialeType $Postfiliale
     */
    protected $Postfiliale = null;

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
     * @param PackstationType $Packstation
     * @param PostfilialeType $Postfiliale
     * @param CommunicationType $Communication
     * @param string $VAT
     */
    public function __construct($Company, $Address, $Packstation, $Postfiliale, $Communication, $VAT)
    {
      $this->Company = $Company;
      $this->Address = $Address;
      $this->Packstation = $Packstation;
      $this->Postfiliale = $Postfiliale;
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
     * @return \DhlInternational\Lib\ReceiverType
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
     * @return \DhlInternational\Lib\ReceiverType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return PackstationType
     */
    public function getPackstation()
    {
      return $this->Packstation;
    }

    /**
     * @param PackstationType $Packstation
     * @return \DhlInternational\Lib\ReceiverType
     */
    public function setPackstation($Packstation)
    {
      $this->Packstation = $Packstation;
      return $this;
    }

    /**
     * @return PostfilialeType
     */
    public function getPostfiliale()
    {
      return $this->Postfiliale;
    }

    /**
     * @param PostfilialeType $Postfiliale
     * @return \DhlInternational\Lib\ReceiverType
     */
    public function setPostfiliale($Postfiliale)
    {
      $this->Postfiliale = $Postfiliale;
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
     * @return \DhlInternational\Lib\ReceiverType
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
     * @return \DhlInternational\Lib\ReceiverType
     */
    public function setVAT($VAT)
    {
      $this->VAT = $VAT;
      return $this;
    }

}
