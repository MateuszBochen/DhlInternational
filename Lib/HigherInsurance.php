<?php

namespace DhlInternational\Lib;

class HigherInsurance
{

    /**
     * @var InsuranceAmount $InsuranceAmount
     */
    protected $InsuranceAmount = null;

    /**
     * @var string $InsuranceCurrency
     */
    protected $InsuranceCurrency = null;

    /**
     * @param InsuranceAmount $InsuranceAmount
     * @param string $InsuranceCurrency
     */
    public function __construct($InsuranceAmount, $InsuranceCurrency)
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
     * @return \DhlInternational\Lib\HigherInsurance
     */
    public function setInsuranceAmount($InsuranceAmount)
    {
      $this->InsuranceAmount = $InsuranceAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getInsuranceCurrency()
    {
      return $this->InsuranceCurrency;
    }

    /**
     * @param string $InsuranceCurrency
     * @return \DhlInternational\Lib\HigherInsurance
     */
    public function setInsuranceCurrency($InsuranceCurrency)
    {
      $this->InsuranceCurrency = $InsuranceCurrency;
      return $this;
    }

}
