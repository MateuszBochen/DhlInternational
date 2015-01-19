<?php

namespace DhlInternational\Lib;

class InsuranceCustom
{

    /**
     * @var InsuranceAmount $InsuranceAmount
     */
    protected $InsuranceAmount = null;

    /**
     * @var InsuranceCurrency $InsuranceCurrency
     */
    protected $InsuranceCurrency = null;

    /**
     * @param InsuranceAmount $InsuranceAmount
     * @param InsuranceCurrency $InsuranceCurrency
     */
    public function __construct($InsuranceAmount = null, $InsuranceCurrency = null)
    {
      $this->InsuranceAmount = $InsuranceAmount;
      $this->InsuranceCurrency = $InsuranceCurrency;
    }

    /**
     * @return InsuranceAmount
     */
    public function getInsuranceAmount()
    {
      return $this->InsuranceAmount;
    }

    /**
     * @param InsuranceAmount $InsuranceAmount
     * @return \DhlInternational\Lib\Insurance
     */
    public function setInsuranceAmount($InsuranceAmount)
    {
      $this->InsuranceAmount = $InsuranceAmount;
      return $this;
    }

    /**
     * @return InsuranceCurrency
     */
    public function getInsuranceCurrency()
    {
      return $this->InsuranceCurrency;
    }

    /**
     * @param InsuranceCurrency $InsuranceCurrency
     * @return \DhlInternational\Lib\Insurance
     */
    public function setInsuranceCurrency($InsuranceCurrency)
    {
      $this->InsuranceCurrency = $InsuranceCurrency;
      return $this;
    }

}
