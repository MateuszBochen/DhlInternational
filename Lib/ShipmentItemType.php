<?php

namespace DhlInternational\Lib;

class ShipmentItemType
{

    /**
     * @var WeightInKG $WeightInKG
     */
    protected $WeightInKG = null;

    /**
     * @var LengthInCM $LengthInCM
     */
    protected $LengthInCM = null;

    /**
     * @var WidthInCM $WidthInCM
     */
    protected $WidthInCM = null;

    /**
     * @var HeightInCM $HeightInCM
     */
    protected $HeightInCM = null;

    /**
     * @param WeightInKG $WeightInKG
     * @param LengthInCM $LengthInCM
     * @param WidthInCM $WidthInCM
     * @param HeightInCM $HeightInCM
     */
    public function __construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM)
    {
      $this->WeightInKG = $WeightInKG;
      $this->LengthInCM = $LengthInCM;
      $this->WidthInCM = $WidthInCM;
      $this->HeightInCM = $HeightInCM;
    }

    /**
     * @return WeightInKG
     */
    public function getWeightInKG()
    {
      return $this->WeightInKG;
    }

    /**
     * @param WeightInKG $WeightInKG
     * @return \DhlInternational\Lib\ShipmentItemType
     */
    public function setWeightInKG($WeightInKG)
    {
      $this->WeightInKG = $WeightInKG;
      return $this;
    }

    /**
     * @return LengthInCM
     */
    public function getLengthInCM()
    {
      return $this->LengthInCM;
    }

    /**
     * @param LengthInCM $LengthInCM
     * @return \DhlInternational\Lib\ShipmentItemType
     */
    public function setLengthInCM($LengthInCM)
    {
      $this->LengthInCM = $LengthInCM;
      return $this;
    }

    /**
     * @return WidthInCM
     */
    public function getWidthInCM()
    {
      return $this->WidthInCM;
    }

    /**
     * @param WidthInCM $WidthInCM
     * @return \DhlInternational\Lib\ShipmentItemType
     */
    public function setWidthInCM($WidthInCM)
    {
      $this->WidthInCM = $WidthInCM;
      return $this;
    }

    /**
     * @return HeightInCM
     */
    public function getHeightInCM()
    {
      return $this->HeightInCM;
    }

    /**
     * @param HeightInCM $HeightInCM
     * @return \DhlInternational\Lib\ShipmentItemType
     */
    public function setHeightInCM($HeightInCM)
    {
      $this->HeightInCM = $HeightInCM;
      return $this;
    }

}
