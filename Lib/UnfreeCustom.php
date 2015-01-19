<?php

namespace DhlInternational\Lib;

class UnfreeCustom
{

    /**
     * @var PaymentType $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @param PaymentType $PaymentType
     * @param string $CustomerNumber
     */
    public function __construct($PaymentType = null, $CustomerNumber = null)
    {
      $this->PaymentType = $PaymentType;
      $this->CustomerNumber = $CustomerNumber;
    }

    /**
     * @return PaymentType
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param PaymentType $PaymentType
     * @return \DhlInternational\Lib\Unfree
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \DhlInternational\Lib\Unfree
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

}
