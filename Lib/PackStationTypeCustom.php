<?php

namespace DhlInternational\Lib;

class PackStationTypeCustom
{

    /**
     * @var number $number
     */
    protected $number = null;

    /**
     * @var stationID $stationID
     */
    protected $stationID = null;

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
     * @param stationID $stationID
     * @param ZipType $Zip
     * @param city $city
     * @param CountryType $Origin
     */
    public function __construct($number = null, $stationID = null, $Zip = null, $city = null, $Origin = null)
    {
      $this->number = $number;
      $this->stationID = $stationID;
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
     * @return \DhlInternational\Lib\PackStationType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return stationID
     */
    public function getStationID()
    {
      return $this->stationID;
    }

    /**
     * @param stationID $stationID
     * @return \DhlInternational\Lib\PackStationType
     */
    public function setStationID($stationID)
    {
      $this->stationID = $stationID;
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
     * @return \DhlInternational\Lib\PackStationType
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
     * @return \DhlInternational\Lib\PackStationType
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
     * @return \DhlInternational\Lib\PackStationType
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

}
