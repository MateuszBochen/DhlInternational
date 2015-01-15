<?php

namespace DhlInternational\Lib;

class ShipmentItemTDType extends ShipmentItemType
{

    /**
     * @param WeightInKG $WeightInKG
     * @param LengthInCM $LengthInCM
     * @param WidthInCM $WidthInCM
     * @param HeightInCM $HeightInCM
     */
    public function __construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM)
    {
      parent::__construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM);
    }

}
