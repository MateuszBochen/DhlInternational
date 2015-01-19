<?php

namespace DhlInternational\Lib;

class ShipperTDTypeCustom extends ShipperTypeCustom
{

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @param string $VAT
     */
    public function __construct($Company = null, $Address = null, $Communication = null, $VAT = null)
    {
      parent::__construct($Company, $Address, $Communication, $VAT);
    }

}
