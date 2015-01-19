<?php

namespace DhlInternational\Lib;

class IdentityTypeCustom
{

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $HouseNumber
     */
    protected $HouseNumber = null;

    /**
     * @var string $Postcode
     */
    protected $Postcode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $Nationality
     */
    protected $Nationality = null;

    /**
     * @param string $FirstName
     * @param string $LastName
     * @param string $Street
     * @param string $HouseNumber
     * @param string $Postcode
     * @param string $City
     * @param string $DateOfBirth
     * @param string $Nationality
     */
    public function __construct($FirstName = null, $LastName = null, $Street = null, $HouseNumber = null, $Postcode = null, $City = null, $DateOfBirth = null, $Nationality = null)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Street = $Street;
      $this->HouseNumber = $HouseNumber;
      $this->Postcode = $Postcode;
      $this->City = $City;
      $this->DateOfBirth = $DateOfBirth;
      $this->Nationality = $Nationality;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \DhlInternational\Lib\IdentityType
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \DhlInternational\Lib\IdentityType
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \DhlInternational\Lib\IdentityType
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
      return $this->HouseNumber;
    }

    /**
     * @param string $HouseNumber
     * @return \DhlInternational\Lib\IdentityType
     */
    public function setHouseNumber($HouseNumber)
    {
      $this->HouseNumber = $HouseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return \DhlInternational\Lib\IdentityType
     */
    public function setPostcode($Postcode)
    {
      $this->Postcode = $Postcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \DhlInternational\Lib\IdentityType
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateOfBirth()
    {
      return $this->DateOfBirth;
    }

    /**
     * @param string $DateOfBirth
     * @return \DhlInternational\Lib\IdentityType
     */
    public function setDateOfBirth($DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth;
      return $this;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
      return $this->Nationality;
    }

    /**
     * @param string $Nationality
     * @return \DhlInternational\Lib\IdentityType
     */
    public function setNationality($Nationality)
    {
      $this->Nationality = $Nationality;
      return $this;
    }

}
