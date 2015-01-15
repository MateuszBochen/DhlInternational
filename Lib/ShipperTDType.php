<?php

namespace DhlInternational\Lib;

class ShipperTDType extends ShipperType
{

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @param string $VAT
     */
    public function __construct($Company, $Address, $Communication, $VAT)
    {
      parent::__construct($Company, $Address, $Communication, $VAT);
    }

}
