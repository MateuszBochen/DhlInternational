<?php

namespace DhlInternational\Lib;

class SMSAvisoCustom
{

    /**
     * @var string $MobilePhoneNumberSender
     */
    protected $MobilePhoneNumberSender = null;

    /**
     * @var string $MobilePhoneNumberReceiver
     */
    protected $MobilePhoneNumberReceiver = null;

    /**
     * @var string $AvisoIdent
     */
    protected $AvisoIdent = null;

    /**
     * @param string $MobilePhoneNumberSender
     * @param string $MobilePhoneNumberReceiver
     * @param string $AvisoIdent
     */
    public function __construct($MobilePhoneNumberSender = null, $MobilePhoneNumberReceiver = null, $AvisoIdent = null)
    {
      $this->MobilePhoneNumberSender = $MobilePhoneNumberSender;
      $this->MobilePhoneNumberReceiver = $MobilePhoneNumberReceiver;
      $this->AvisoIdent = $AvisoIdent;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumberSender()
    {
      return $this->MobilePhoneNumberSender;
    }

    /**
     * @param string $MobilePhoneNumberSender
     * @return \DhlInternational\Lib\SMSAviso
     */
    public function setMobilePhoneNumberSender($MobilePhoneNumberSender)
    {
      $this->MobilePhoneNumberSender = $MobilePhoneNumberSender;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumberReceiver()
    {
      return $this->MobilePhoneNumberReceiver;
    }

    /**
     * @param string $MobilePhoneNumberReceiver
     * @return \DhlInternational\Lib\SMSAviso
     */
    public function setMobilePhoneNumberReceiver($MobilePhoneNumberReceiver)
    {
      $this->MobilePhoneNumberReceiver = $MobilePhoneNumberReceiver;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvisoIdent()
    {
      return $this->AvisoIdent;
    }

    /**
     * @param string $AvisoIdent
     * @return \DhlInternational\Lib\SMSAviso
     */
    public function setAvisoIdent($AvisoIdent)
    {
      $this->AvisoIdent = $AvisoIdent;
      return $this;
    }

}
