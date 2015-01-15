<?php

namespace DhlInternational\Lib;

class ReceiverTDType extends ReceiverType
{

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
      parent::__construct($Company, $Address, $Packstation, $Postfiliale, $Communication, $VAT);
    }

}
