<?php

namespace DhlInternational\Lib;

class AdvisoryDataCustom
{

    /**
     * @var string $ModuleType
     */
    protected $ModuleType = null;

    /**
     * @var string $MobilePhoneNumber
     */
    protected $MobilePhoneNumber = null;

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @param string $ModuleType
     * @param string $MobilePhoneNumber
     * @param string $EmailAddress
     * @param string $Reference
     * @param string $Language
     */
    public function __construct($ModuleType = null, $MobilePhoneNumber = null, $EmailAddress = null, $Reference = null, $Language = null)
    {
      $this->ModuleType = $ModuleType;
      $this->MobilePhoneNumber = $MobilePhoneNumber;
      $this->EmailAddress = $EmailAddress;
      $this->Reference = $Reference;
      $this->Language = $Language;
    }

    /**
     * @return string
     */
    public function getModuleType()
    {
      return $this->ModuleType;
    }

    /**
     * @param string $ModuleType
     * @return \DhlInternational\Lib\AdvisoryData
     */
    public function setModuleType($ModuleType)
    {
      $this->ModuleType = $ModuleType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumber()
    {
      return $this->MobilePhoneNumber;
    }

    /**
     * @param string $MobilePhoneNumber
     * @return \DhlInternational\Lib\AdvisoryData
     */
    public function setMobilePhoneNumber($MobilePhoneNumber)
    {
      $this->MobilePhoneNumber = $MobilePhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return \DhlInternational\Lib\AdvisoryData
     */
    public function setEmailAddress($EmailAddress)
    {
      $this->EmailAddress = $EmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \DhlInternational\Lib\AdvisoryData
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \DhlInternational\Lib\AdvisoryData
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
