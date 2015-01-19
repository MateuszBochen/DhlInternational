<?php

namespace DhlInternational\Lib;

class NativeAddressTypeCustom
{

    /**
     * @var streetName $streetName
     */
    protected $streetName = null;

    /**
     * @var streetNumber $streetNumber
     */
    protected $streetNumber = null;

    /**
     * @var careOfName $careOfName
     */
    protected $careOfName = null;

    /**
     * @var ZipType $Zip
     */
    protected $Zip = null;

    /**
     * @var city $city
     */
    protected $city = null;

    /**
     * @var district $district
     */
    protected $district = null;

    /**
     * @var CountryType $Origin
     */
    protected $Origin = null;

    /**
     * @var floorNumber $floorNumber
     */
    protected $floorNumber = null;

    /**
     * @var roomNumber $roomNumber
     */
    protected $roomNumber = null;

    /**
     * @var countryISOType $languageCodeISO
     */
    protected $languageCodeISO = null;

    /**
     * @var note $note
     */
    protected $note = null;

    /**
     * @param streetName $streetName
     * @param streetNumber $streetNumber
     * @param careOfName $careOfName
     * @param ZipType $Zip
     * @param city $city
     * @param district $district
     * @param CountryType $Origin
     * @param floorNumber $floorNumber
     * @param roomNumber $roomNumber
     * @param countryISOType $languageCodeISO
     * @param note $note
     */
    public function __construct($streetName = null, $streetNumber = null, $careOfName = null, $Zip = null, $city = null, $district = null, $Origin = null, $floorNumber = null, $roomNumber = null, $languageCodeISO = null, $note = null)
    {
      $this->streetName = $streetName;
      $this->streetNumber = $streetNumber;
      $this->careOfName = $careOfName;
      $this->Zip = $Zip;
      $this->city = $city;
      $this->district = $district;
      $this->Origin = $Origin;
      $this->floorNumber = $floorNumber;
      $this->roomNumber = $roomNumber;
      $this->languageCodeISO = $languageCodeISO;
      $this->note = $note;
    }

    /**
     * @return streetName
     */
    public function getStreetName()
    {
      return $this->streetName;
    }

    /**
     * @param streetName $streetName
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setStreetName($streetName)
    {
      $this->streetName = $streetName;
      return $this;
    }

    /**
     * @return streetNumber
     */
    public function getStreetNumber()
    {
      return $this->streetNumber;
    }

    /**
     * @param streetNumber $streetNumber
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setStreetNumber($streetNumber)
    {
      $this->streetNumber = $streetNumber;
      return $this;
    }

    /**
     * @return careOfName
     */
    public function getCareOfName()
    {
      return $this->careOfName;
    }

    /**
     * @param careOfName $careOfName
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setCareOfName($careOfName)
    {
      $this->careOfName = $careOfName;
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
     * @return \DhlInternational\Lib\NativeAddressType
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
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return district
     */
    public function getDistrict()
    {
      return $this->district;
    }

    /**
     * @param district $district
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setDistrict($district)
    {
      $this->district = $district;
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
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return floorNumber
     */
    public function getFloorNumber()
    {
      return $this->floorNumber;
    }

    /**
     * @param floorNumber $floorNumber
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setFloorNumber($floorNumber)
    {
      $this->floorNumber = $floorNumber;
      return $this;
    }

    /**
     * @return roomNumber
     */
    public function getRoomNumber()
    {
      return $this->roomNumber;
    }

    /**
     * @param roomNumber $roomNumber
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setRoomNumber($roomNumber)
    {
      $this->roomNumber = $roomNumber;
      return $this;
    }

    /**
     * @return countryISOType
     */
    public function getLanguageCodeISO()
    {
      return $this->languageCodeISO;
    }

    /**
     * @param countryISOType $languageCodeISO
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setLanguageCodeISO($languageCodeISO)
    {
      $this->languageCodeISO = $languageCodeISO;
      return $this;
    }

    /**
     * @return note
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param note $note
     * @return \DhlInternational\Lib\NativeAddressType
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

}
