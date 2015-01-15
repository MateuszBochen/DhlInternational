<?php

namespace DhlInternational\Lib;

class FurtherAddressesDDType
{

    /**
     * @var DeliveryAdress $DeliveryAdress
     */
    protected $DeliveryAdress = null;

    /**
     * @param DeliveryAdress $DeliveryAdress
     */
    public function __construct($DeliveryAdress)
    {
      $this->DeliveryAdress = $DeliveryAdress;
    }

    /**
     * @return DeliveryAdress
     */
    public function getDeliveryAdress()
    {
      return $this->DeliveryAdress;
    }

    /**
     * @param DeliveryAdress $DeliveryAdress
     * @return \DhlInternational\Lib\FurtherAddressesDDType
     */
    public function setDeliveryAdress($DeliveryAdress)
    {
      $this->DeliveryAdress = $DeliveryAdress;
      return $this;
    }

}
