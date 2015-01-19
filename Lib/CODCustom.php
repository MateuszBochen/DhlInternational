<?php

namespace DhlInternational\Lib;

class CODCustom
{

    /**
     * @var CODAmount $CODAmount
     */
    protected $CODAmount = null;

    /**
     * @var string $CODCurrency
     */
    protected $CODCurrency = null;

    /**
     * @param CODAmount $CODAmount
     * @param string $CODCurrency
     */
    public function __construct($CODAmount = null, $CODCurrency = null)
    {
      $this->CODAmount = $CODAmount;
      $this->CODCurrency = $CODCurrency;
    }

    /**
     * @return CODAmount
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param CODAmount $CODAmount
     * @return \DhlInternational\Lib\COD
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCODCurrency()
    {
      return $this->CODCurrency;
    }

    /**
     * @param string $CODCurrency
     * @return \DhlInternational\Lib\COD
     */
    public function setCODCurrency($CODCurrency)
    {
      $this->CODCurrency = $CODCurrency;
      return $this;
    }

}
