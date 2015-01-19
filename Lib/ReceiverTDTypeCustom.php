<?php

namespace DhlInternational\Lib;

class ReceiverTDTypeCustom extends ReceiverTypeCustom
{

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param PackstationType $Packstation
     * @param PostfilialeType $Postfiliale
     * @param CommunicationType $Communication
     * @param string $VAT
     */
    public function __construct($Company = null, $Address = null, $Packstation = null, $Postfiliale = null, $Communication = null, $VAT = null)
    {
      parent::__construct($Company, $Address, $Packstation, $Postfiliale, $Communication, $VAT);
    }

}
