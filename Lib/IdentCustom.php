<?php

namespace DhlInternational\Lib;

class IdentCustom
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var DateOfBirth $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $IdentityCardType
     */
    protected $IdentityCardType = null;

    /**
     * @var string $IdentityCardNumber
     */
    protected $IdentityCardNumber = null;

    /**
     * @param string $Name
     * @param DateOfBirth $DateOfBirth
     * @param string $IdentityCardType
     * @param string $IdentityCardNumber
     */
    public function __construct($Name = null, $DateOfBirth = null, $IdentityCardType = null, $IdentityCardNumber = null)
    {
      $this->Name = $Name;
      $this->DateOfBirth = $DateOfBirth;
      $this->IdentityCardType = $IdentityCardType;
      $this->IdentityCardNumber = $IdentityCardNumber;
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
     * @return \DhlInternational\Lib\Ident
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \DhlInternational\Lib\Ident
     */
    public function setDateOfBirth($DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth;
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
     * @return \DhlInternational\Lib\Ident
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
     * @return \DhlInternational\Lib\Ident
     */
    public function setIdentityCardNumber($IdentityCardNumber)
    {
      $this->IdentityCardNumber = $IdentityCardNumber;
      return $this;
    }

}
