<?php

namespace DhlInternational\Lib;

class CountryTypeCustom
{

    /**
     * @var country $country
     */
    protected $country = null;

    /**
     * @var countryISOType $countryISOCode
     */
    protected $countryISOCode = null;

    /**
     * @var state $state
     */
    protected $state = null;

    /**
     * @param country $country
     * @param countryISOType $countryISOCode
     * @param state $state
     */
    public function __construct($country = null, $countryISOCode = null, $state = null)
    {
      $this->country = $country;
      $this->countryISOCode = $countryISOCode;
      $this->state = $state;
    }

    /**
     * @return country
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param country $country
     * @return \DhlInternational\Lib\CountryType
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return countryISOType
     */
    public function getCountryISOCode()
    {
      return $this->countryISOCode;
    }

    /**
     * @param countryISOType $countryISOCode
     * @return \DhlInternational\Lib\CountryType
     */
    public function setCountryISOCode($countryISOCode)
    {
      $this->countryISOCode = $countryISOCode;
      return $this;
    }

    /**
     * @return state
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param state $state
     * @return \DhlInternational\Lib\CountryType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

}
