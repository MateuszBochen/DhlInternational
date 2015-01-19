<?php

namespace DhlInternational\Lib;

class ShipmentItemDDTypeCustom extends ShipmentItemTypeCustom
{

    /**
     * @var string $PackageType
     */
    protected $PackageType = null;

    /**
     * @param WeightInKG $WeightInKG
     * @param LengthInCM $LengthInCM
     * @param WidthInCM $WidthInCM
     * @param HeightInCM $HeightInCM
     * @param string $PackageType
     */
    public function __construct($WeightInKG = null, $LengthInCM = null, $WidthInCM = null, $HeightInCM = null, $PackageType = null)
    {
      parent::__construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM);
      $this->PackageType = $PackageType;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
      return $this->PackageType;
    }

    /**
     * @param string $PackageType
     * @return \DhlInternational\Lib\ShipmentItemDDType
     */
    public function setPackageType($PackageType)
    {
      $this->PackageType = $PackageType;
      return $this;
    }

}
