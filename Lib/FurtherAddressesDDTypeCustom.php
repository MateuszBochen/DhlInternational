<?php

namespace DhlInternational\Lib;

class FurtherAddressesDDTypeCustom
{

    /**
     * @var DeliveryAdress $DeliveryAdress
     */
    protected $DeliveryAdress = null;

    /**
     * @param DeliveryAdress $DeliveryAdress
     */
    public function __construct($DeliveryAdress = null)
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
