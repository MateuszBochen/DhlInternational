<?php

namespace DhlInternational\Lib;

class CommunicationType
{

    /**
     * @var phone $phone
     */
    protected $phone = null;

    /**
     * @var email $email
     */
    protected $email = null;

    /**
     * @var fax $fax
     */
    protected $fax = null;

    /**
     * @var mobile $mobile
     */
    protected $mobile = null;

    /**
     * @var internet $internet
     */
    protected $internet = null;

    /**
     * @var contactPerson $contactPerson
     */
    protected $contactPerson = null;

    /**
     * @param phone $phone
     * @param email $email
     * @param fax $fax
     * @param mobile $mobile
     * @param internet $internet
     * @param contactPerson $contactPerson
     */
    public function __construct($phone, $email, $fax, $mobile, $internet, $contactPerson)
    {
      $this->phone = $phone;
      $this->email = $email;
      $this->fax = $fax;
      $this->mobile = $mobile;
      $this->internet = $internet;
      $this->contactPerson = $contactPerson;
    }

    /**
     * @return phone
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param phone $phone
     * @return \DhlInternational\Lib\CommunicationType
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return email
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param email $email
     * @return \DhlInternational\Lib\CommunicationType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return fax
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param fax $fax
     * @return \DhlInternational\Lib\CommunicationType
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return mobile
     */
    public function getMobile()
    {
      return $this->mobile;
    }

    /**
     * @param mobile $mobile
     * @return \DhlInternational\Lib\CommunicationType
     */
    public function setMobile($mobile)
    {
      $this->mobile = $mobile;
      return $this;
    }

    /**
     * @return internet
     */
    public function getInternet()
    {
      return $this->internet;
    }

    /**
     * @param internet $internet
     * @return \DhlInternational\Lib\CommunicationType
     */
    public function setInternet($internet)
    {
      $this->internet = $internet;
      return $this;
    }

    /**
     * @return contactPerson
     */
    public function getContactPerson()
    {
      return $this->contactPerson;
    }

    /**
     * @param contactPerson $contactPerson
     * @return \DhlInternational\Lib\CommunicationType
     */
    public function setContactPerson($contactPerson)
    {
      $this->contactPerson = $contactPerson;
      return $this;
    }

}
