<?php

namespace DhlInternational\Lib;

class PostOfficeType
{

    /**
     * @var number $number
     */
    protected $number = null;

    /**
     * @var ZipType $Zip
     */
    protected $Zip = null;

    /**
     * @var city $city
     */
    protected $city = null;

    /**
     * @var CountryType $Origin
     */
    protected $Origin = null;

    /**
     * @param number $number
     * @param ZipType $Zip
     * @param city $city
     * @param CountryType $Origin
     */
    public function __construct($number, $Zip, $city, $Origin)
    {
      $this->number = $number;
      $this->Zip = $Zip;
      $this->city = $city;
      $this->Origin = $Origin;
    }

    /**
     * @return number
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param number $number
     * @return \DhlInternational\Lib\PostOfficeType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return ZipType
     */
    public function getZip()
    {
      return $this->Zip;
    }

    /**
     * @param ZipType $Zip
     * @return \DhlInternational\Lib\PostOfficeType
     */
    public function setZip($Zip)
    {
      $this->Zip = $Zip;
      return $this;
    }

    /**
     * @return city
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param city $city
     * @return \DhlInternational\Lib\PostOfficeType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return CountryType
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param CountryType $Origin
     * @return \DhlInternational\Lib\PostOfficeType
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

}
