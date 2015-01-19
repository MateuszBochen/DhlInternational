<?php

namespace DhlInternational\Lib;

class ExportDocPositionCustom
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $CountryCodeOrigin
     */
    protected $CountryCodeOrigin = null;

    /**
     * @var string $CommodityCode
     */
    protected $CommodityCode = null;

    /**
     * @var Amount $Amount
     */
    protected $Amount = null;

    /**
     * @var NetWeightInKG $NetWeightInKG
     */
    protected $NetWeightInKG = null;

    /**
     * @var GrossWeightInKG $GrossWeightInKG
     */
    protected $GrossWeightInKG = null;

    /**
     * @var CustomsValue $CustomsValue
     */
    protected $CustomsValue = null;

    /**
     * @var string $CustomsCurrency
     */
    protected $CustomsCurrency = null;

    /**
     * @param string $Description
     * @param string $CountryCodeOrigin
     * @param string $CommodityCode
     * @param Amount $Amount
     * @param NetWeightInKG $NetWeightInKG
     * @param GrossWeightInKG $GrossWeightInKG
     * @param CustomsValue $CustomsValue
     * @param string $CustomsCurrency
     */
    public function __construct($Description = null, $CountryCodeOrigin = null, $CommodityCode = null, $Amount = null, $NetWeightInKG = null, $GrossWeightInKG = null, $CustomsValue = null, $CustomsCurrency = null)
    {
      $this->Description = $Description;
      $this->CountryCodeOrigin = $CountryCodeOrigin;
      $this->CommodityCode = $CommodityCode;
      $this->Amount = $Amount;
      $this->NetWeightInKG = $NetWeightInKG;
      $this->GrossWeightInKG = $GrossWeightInKG;
      $this->CustomsValue = $CustomsValue;
      $this->CustomsCurrency = $CustomsCurrency;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \DhlInternational\Lib\ExportDocPosition
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCodeOrigin()
    {
      return $this->CountryCodeOrigin;
    }

    /**
     * @param string $CountryCodeOrigin
     * @return \DhlInternational\Lib\ExportDocPosition
     */
    public function setCountryCodeOrigin($CountryCodeOrigin)
    {
      $this->CountryCodeOrigin = $CountryCodeOrigin;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommodityCode()
    {
      return $this->CommodityCode;
    }

    /**
     * @param string $CommodityCode
     * @return \DhlInternational\Lib\ExportDocPosition
     */
    public function setCommodityCode($CommodityCode)
    {
      $this->CommodityCode = $CommodityCode;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param Amount $Amount
     * @return \DhlInternational\Lib\ExportDocPosition
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return NetWeightInKG
     */
    public function getNetWeightInKG()
    {
      return $this->NetWeightInKG;
    }

    /**
     * @param NetWeightInKG $NetWeightInKG
     * @return \DhlInternational\Lib\ExportDocPosition
     */
    public function setNetWeightInKG($NetWeightInKG)
    {
      $this->NetWeightInKG = $NetWeightInKG;
      return $this;
    }

    /**
     * @return GrossWeightInKG
     */
    public function getGrossWeightInKG()
    {
      return $this->GrossWeightInKG;
    }

    /**
     * @param GrossWeightInKG $GrossWeightInKG
     * @return \DhlInternational\Lib\ExportDocPosition
     */
    public function setGrossWeightInKG($GrossWeightInKG)
    {
      $this->GrossWeightInKG = $GrossWeightInKG;
      return $this;
    }

    /**
     * @return CustomsValue
     */
    public function getCustomsValue()
    {
      return $this->CustomsValue;
    }

    /**
     * @param CustomsValue $CustomsValue
     * @return \DhlInternational\Lib\ExportDocPosition
     */
    public function setCustomsValue($CustomsValue)
    {
      $this->CustomsValue = $CustomsValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsCurrency()
    {
      return $this->CustomsCurrency;
    }

    /**
     * @param string $CustomsCurrency
     * @return \DhlInternational\Lib\ExportDocPosition
     */
    public function setCustomsCurrency($CustomsCurrency)
    {
      $this->CustomsCurrency = $CustomsCurrency;
      return $this;
    }

}
