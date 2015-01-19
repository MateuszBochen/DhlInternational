<?php

namespace DhlInternational\Lib;

class ShipmentItemTDTypeCustom extends ShipmentItemTypeCustom
{

    /**
     * @param WeightInKG $WeightInKG
     * @param LengthInCM $LengthInCM
     * @param WidthInCM $WidthInCM
     * @param HeightInCM $HeightInCM
     */
    public function __construct($WeightInKG = null, $LengthInCM = null, $WidthInCM = null, $HeightInCM = null)
    {
      parent::__construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM);
    }

}
