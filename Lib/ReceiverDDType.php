<?php

namespace DhlInternational\Lib;

class ReceiverDDType extends ReceiverType
{

    /**
     * @var string $CompanyName3
     */
    protected $CompanyName3 = null;

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param PackstationType $Packstation
     * @param PostfilialeType $Postfiliale
     * @param CommunicationType $Communication
     * @param string $VAT
     * @param string $CompanyName3
     */
    public function __construct($Company, $Address, $Packstation, $Postfiliale, $Communication, $VAT, $CompanyName3)
    {
      parent::__construct($Company, $Address, $Packstation, $Postfiliale, $Communication, $VAT);
      $this->CompanyName3 = $CompanyName3;
    }

    /**
     * @return string
     */
    public function getCompanyName3()
    {
      return $this->CompanyName3;
    }

    /**
     * @param string $CompanyName3
     * @return \DhlInternational\Lib\ReceiverDDType
     */
    public function setCompanyName3($CompanyName3)
    {
      $this->CompanyName3 = $CompanyName3;
      return $this;
    }

}
