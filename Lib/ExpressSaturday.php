<?php

namespace DhlInternational\Lib;

class ExpressSaturday
{

    /**
     * @var ShippingDate $ShippingDate
     */
    protected $ShippingDate = null;

    /**
     * @param ShippingDate $ShippingDate
     */
    public function __construct($ShippingDate)
    {
      $this->ShippingDate = $ShippingDate;
    }

    /**
     * @return ShippingDate
     */
    public function getShippingDate()
    {
      return $this->ShippingDate;
    }

    /**
     * @param ShippingDate $ShippingDate
     * @return \DhlInternational\Lib\ExpressSaturday
     */
    public function setShippingDate($ShippingDate)
    {
      $this->ShippingDate = $ShippingDate;
      return $this;
    }

}
