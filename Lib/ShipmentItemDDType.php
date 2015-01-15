<?php

namespace DhlInternational\Lib;

class ShipmentItemDDType extends ShipmentItemType
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
    public function __construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM, $PackageType)
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
