<?php

namespace DhlInternational\Lib;

class ShipperDDType extends ShipperType
{

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @param string $VAT
     * @param string $Remark
     */
    public function __construct($Company, $Address, $Communication, $VAT, $Remark)
    {
      parent::__construct($Company, $Address, $Communication, $VAT);
      $this->Remark = $Remark;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return \DhlInternational\Lib\ShipperDDType
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

}
