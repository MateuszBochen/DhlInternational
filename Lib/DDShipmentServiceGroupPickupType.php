<?php

namespace DhlInternational\Lib;

class DDShipmentServiceGroupPickupType
{

    /**
     * @var boolean $PickupSaturday
     */
    protected $PickupSaturday = null;

    /**
     * @var boolean $PickupLate
     */
    protected $PickupLate = null;

    /**
     * @param boolean $PickupSaturday
     * @param boolean $PickupLate
     */
    public function __construct($PickupSaturday, $PickupLate)
    {
      $this->PickupSaturday = $PickupSaturday;
      $this->PickupLate = $PickupLate;
    }

    /**
     * @return boolean
     */
    public function getPickupSaturday()
    {
      return $this->PickupSaturday;
    }

    /**
     * @param boolean $PickupSaturday
     * @return \DhlInternational\Lib\DDShipmentServiceGroupPickupType
     */
    public function setPickupSaturday($PickupSaturday)
    {
      $this->PickupSaturday = $PickupSaturday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPickupLate()
    {
      return $this->PickupLate;
    }

    /**
     * @param boolean $PickupLate
     * @return \DhlInternational\Lib\DDShipmentServiceGroupPickupType
     */
    public function setPickupLate($PickupLate)
    {
      $this->PickupLate = $PickupLate;
      return $this;
    }

}
