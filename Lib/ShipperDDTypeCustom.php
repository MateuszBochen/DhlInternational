<?php

namespace DhlInternational\Lib;

class ShipperDDTypeCustom extends ShipperTypeCustom
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
    public function __construct($Company = null, $Address = null, $Communication = null, $VAT = null, $Remark = null)
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
