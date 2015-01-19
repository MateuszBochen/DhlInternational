<?php

namespace DhlInternational\Lib;

class IdentPremiumCustom
{

    /**
     * @var string $Firstname
     */
    protected $Firstname = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $IdentityCardType
     */
    protected $IdentityCardType = null;

    /**
     * @var string $IdentityCardNumber
     */
    protected $IdentityCardNumber = null;

    /**
     * @var string $MinimumAge
     */
    protected $MinimumAge = null;

    /**
     * @var DateOfBirth $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $StreetAndHouseNumber
     */
    protected $StreetAndHouseNumber = null;

    /**
     * @var string $PostcodeAndCity
     */
    protected $PostcodeAndCity = null;

    /**
     * @var string $District
     */
    protected $District = null;

    /**
     * @var boolean $WithIDPContract
     */
    protected $WithIDPContract = null;

    /**
     * @var string $ContractID
     */
    protected $ContractID = null;

    /**
     * @var string $Nationality
     */
    protected $Nationality = null;

    /**
     * @var string $FreeText1
     */
    protected $FreeText1 = null;

    /**
     * @var string $FreeText2
     */
    protected $FreeText2 = null;

    /**
     * @var boolean $CorrOfNameAllowed
     */
    protected $CorrOfNameAllowed = null;

    /**
     * @var boolean $CorrOfFirstNameAllowed
     */
    protected $CorrOfFirstNameAllowed = null;

    /**
     * @var boolean $CorrOfDayOfBirthAllowed
     */
    protected $CorrOfDayOfBirthAllowed = null;

    /**
     * @var boolean $CorrOfMinimumAgeAllowed
     */
    protected $CorrOfMinimumAgeAllowed = null;

    /**
     * @var boolean $CorrOfIdentityCardTypeAllowed
     */
    protected $CorrOfIdentityCardTypeAllowed = null;

    /**
     * @var boolean $CorrOfIdentityCardNumberAllowed
     */
    protected $CorrOfIdentityCardNumberAllowed = null;

    /**
     * @var boolean $CorrOfAddressAllowed
     */
    protected $CorrOfAddressAllowed = null;

    /**
     * @var boolean $CorrOfContractAllowed
     */
    protected $CorrOfContractAllowed = null;

    /**
     * @var boolean $CorrOfContractIdAllowed
     */
    protected $CorrOfContractIdAllowed = null;

    /**
     * @var boolean $CorrOfNationalityAllowed
     */
    protected $CorrOfNationalityAllowed = null;

    /**
     * @var boolean $CorrOfFreetextsAllowed
     */
    protected $CorrOfFreetextsAllowed = null;

    /**
     * @param string $Firstname
     * @param string $Name
     * @param string $IdentityCardType
     * @param string $IdentityCardNumber
     * @param string $MinimumAge
     * @param DateOfBirth $DateOfBirth
     * @param string $StreetAndHouseNumber
     * @param string $PostcodeAndCity
     * @param string $District
     * @param boolean $WithIDPContract
     * @param string $ContractID
     * @param string $Nationality
     * @param string $FreeText1
     * @param string $FreeText2
     * @param boolean $CorrOfNameAllowed
     * @param boolean $CorrOfFirstNameAllowed
     * @param boolean $CorrOfDayOfBirthAllowed
     * @param boolean $CorrOfMinimumAgeAllowed
     * @param boolean $CorrOfIdentityCardTypeAllowed
     * @param boolean $CorrOfIdentityCardNumberAllowed
     * @param boolean $CorrOfAddressAllowed
     * @param boolean $CorrOfContractAllowed
     * @param boolean $CorrOfContractIdAllowed
     * @param boolean $CorrOfNationalityAllowed
     * @param boolean $CorrOfFreetextsAllowed
     */
    public function __construct($Firstname = null, $Name = null, $IdentityCardType = null, $IdentityCardNumber = null, $MinimumAge = null, $DateOfBirth = null, $StreetAndHouseNumber = null, $PostcodeAndCity = null, $District = null, $WithIDPContract = null, $ContractID = null, $Nationality = null, $FreeText1 = null, $FreeText2 = null, $CorrOfNameAllowed = null, $CorrOfFirstNameAllowed = null, $CorrOfDayOfBirthAllowed = null, $CorrOfMinimumAgeAllowed = null, $CorrOfIdentityCardTypeAllowed = null, $CorrOfIdentityCardNumberAllowed = null, $CorrOfAddressAllowed = null, $CorrOfContractAllowed = null, $CorrOfContractIdAllowed = null, $CorrOfNationalityAllowed = null, $CorrOfFreetextsAllowed = null)
    {
      $this->Firstname = $Firstname;
      $this->Name = $Name;
      $this->IdentityCardType = $IdentityCardType;
      $this->IdentityCardNumber = $IdentityCardNumber;
      $this->MinimumAge = $MinimumAge;
      $this->DateOfBirth = $DateOfBirth;
      $this->StreetAndHouseNumber = $StreetAndHouseNumber;
      $this->PostcodeAndCity = $PostcodeAndCity;
      $this->District = $District;
      $this->WithIDPContract = $WithIDPContract;
      $this->ContractID = $ContractID;
      $this->Nationality = $Nationality;
      $this->FreeText1 = $FreeText1;
      $this->FreeText2 = $FreeText2;
      $this->CorrOfNameAllowed = $CorrOfNameAllowed;
      $this->CorrOfFirstNameAllowed = $CorrOfFirstNameAllowed;
      $this->CorrOfDayOfBirthAllowed = $CorrOfDayOfBirthAllowed;
      $this->CorrOfMinimumAgeAllowed = $CorrOfMinimumAgeAllowed;
      $this->CorrOfIdentityCardTypeAllowed = $CorrOfIdentityCardTypeAllowed;
      $this->CorrOfIdentityCardNumberAllowed = $CorrOfIdentityCardNumberAllowed;
      $this->CorrOfAddressAllowed = $CorrOfAddressAllowed;
      $this->CorrOfContractAllowed = $CorrOfContractAllowed;
      $this->CorrOfContractIdAllowed = $CorrOfContractIdAllowed;
      $this->CorrOfNationalityAllowed = $CorrOfNationalityAllowed;
      $this->CorrOfFreetextsAllowed = $CorrOfFreetextsAllowed;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
      return $this->Firstname;
    }

    /**
     * @param string $Firstname
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setFirstname($Firstname)
    {
      $this->Firstname = $Firstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentityCardType()
    {
      return $this->IdentityCardType;
    }

    /**
     * @param string $IdentityCardType
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setIdentityCardType($IdentityCardType)
    {
      $this->IdentityCardType = $IdentityCardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentityCardNumber()
    {
      return $this->IdentityCardNumber;
    }

    /**
     * @param string $IdentityCardNumber
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setIdentityCardNumber($IdentityCardNumber)
    {
      $this->IdentityCardNumber = $IdentityCardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinimumAge()
    {
      return $this->MinimumAge;
    }

    /**
     * @param string $MinimumAge
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setMinimumAge($MinimumAge)
    {
      $this->MinimumAge = $MinimumAge;
      return $this;
    }

    /**
     * @return DateOfBirth
     */
    public function getDateOfBirth()
    {
      return $this->DateOfBirth;
    }

    /**
     * @param DateOfBirth $DateOfBirth
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setDateOfBirth($DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetAndHouseNumber()
    {
      return $this->StreetAndHouseNumber;
    }

    /**
     * @param string $StreetAndHouseNumber
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setStreetAndHouseNumber($StreetAndHouseNumber)
    {
      $this->StreetAndHouseNumber = $StreetAndHouseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcodeAndCity()
    {
      return $this->PostcodeAndCity;
    }

    /**
     * @param string $PostcodeAndCity
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setPostcodeAndCity($PostcodeAndCity)
    {
      $this->PostcodeAndCity = $PostcodeAndCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
      return $this->District;
    }

    /**
     * @param string $District
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setDistrict($District)
    {
      $this->District = $District;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWithIDPContract()
    {
      return $this->WithIDPContract;
    }

    /**
     * @param boolean $WithIDPContract
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setWithIDPContract($WithIDPContract)
    {
      $this->WithIDPContract = $WithIDPContract;
      return $this;
    }

    /**
     * @return string
     */
    public function getContractID()
    {
      return $this->ContractID;
    }

    /**
     * @param string $ContractID
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setContractID($ContractID)
    {
      $this->ContractID = $ContractID;
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
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setNationality($Nationality)
    {
      $this->Nationality = $Nationality;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeText1()
    {
      return $this->FreeText1;
    }

    /**
     * @param string $FreeText1
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setFreeText1($FreeText1)
    {
      $this->FreeText1 = $FreeText1;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeText2()
    {
      return $this->FreeText2;
    }

    /**
     * @param string $FreeText2
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setFreeText2($FreeText2)
    {
      $this->FreeText2 = $FreeText2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfNameAllowed()
    {
      return $this->CorrOfNameAllowed;
    }

    /**
     * @param boolean $CorrOfNameAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfNameAllowed($CorrOfNameAllowed)
    {
      $this->CorrOfNameAllowed = $CorrOfNameAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfFirstNameAllowed()
    {
      return $this->CorrOfFirstNameAllowed;
    }

    /**
     * @param boolean $CorrOfFirstNameAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfFirstNameAllowed($CorrOfFirstNameAllowed)
    {
      $this->CorrOfFirstNameAllowed = $CorrOfFirstNameAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfDayOfBirthAllowed()
    {
      return $this->CorrOfDayOfBirthAllowed;
    }

    /**
     * @param boolean $CorrOfDayOfBirthAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfDayOfBirthAllowed($CorrOfDayOfBirthAllowed)
    {
      $this->CorrOfDayOfBirthAllowed = $CorrOfDayOfBirthAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfMinimumAgeAllowed()
    {
      return $this->CorrOfMinimumAgeAllowed;
    }

    /**
     * @param boolean $CorrOfMinimumAgeAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfMinimumAgeAllowed($CorrOfMinimumAgeAllowed)
    {
      $this->CorrOfMinimumAgeAllowed = $CorrOfMinimumAgeAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfIdentityCardTypeAllowed()
    {
      return $this->CorrOfIdentityCardTypeAllowed;
    }

    /**
     * @param boolean $CorrOfIdentityCardTypeAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfIdentityCardTypeAllowed($CorrOfIdentityCardTypeAllowed)
    {
      $this->CorrOfIdentityCardTypeAllowed = $CorrOfIdentityCardTypeAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfIdentityCardNumberAllowed()
    {
      return $this->CorrOfIdentityCardNumberAllowed;
    }

    /**
     * @param boolean $CorrOfIdentityCardNumberAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfIdentityCardNumberAllowed($CorrOfIdentityCardNumberAllowed)
    {
      $this->CorrOfIdentityCardNumberAllowed = $CorrOfIdentityCardNumberAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfAddressAllowed()
    {
      return $this->CorrOfAddressAllowed;
    }

    /**
     * @param boolean $CorrOfAddressAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfAddressAllowed($CorrOfAddressAllowed)
    {
      $this->CorrOfAddressAllowed = $CorrOfAddressAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfContractAllowed()
    {
      return $this->CorrOfContractAllowed;
    }

    /**
     * @param boolean $CorrOfContractAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfContractAllowed($CorrOfContractAllowed)
    {
      $this->CorrOfContractAllowed = $CorrOfContractAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfContractIdAllowed()
    {
      return $this->CorrOfContractIdAllowed;
    }

    /**
     * @param boolean $CorrOfContractIdAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfContractIdAllowed($CorrOfContractIdAllowed)
    {
      $this->CorrOfContractIdAllowed = $CorrOfContractIdAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfNationalityAllowed()
    {
      return $this->CorrOfNationalityAllowed;
    }

    /**
     * @param boolean $CorrOfNationalityAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfNationalityAllowed($CorrOfNationalityAllowed)
    {
      $this->CorrOfNationalityAllowed = $CorrOfNationalityAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrOfFreetextsAllowed()
    {
      return $this->CorrOfFreetextsAllowed;
    }

    /**
     * @param boolean $CorrOfFreetextsAllowed
     * @return \DhlInternational\Lib\IdentPremium
     */
    public function setCorrOfFreetextsAllowed($CorrOfFreetextsAllowed)
    {
      $this->CorrOfFreetextsAllowed = $CorrOfFreetextsAllowed;
      return $this;
    }

}
