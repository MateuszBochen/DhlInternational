<?php

namespace DhlInternational\Lib;

class AuthentificationTypeCustom
{

    /**
     * @var user $user
     */
    protected $user = null;

    /**
     * @var signature $signature
     */
    protected $signature = null;

    /**
     * @var accountNumber $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var type $type
     */
    protected $type = null;

    /**
     * @param user $user
     * @param signature $signature
     * @param accountNumber $accountNumber
     * @param type $type
     */
    public function __construct($user = null, $signature = null, $accountNumber = null, $type = null)
    {
      $this->user = $user;
      $this->signature = $signature;
      $this->accountNumber = $accountNumber;
      $this->type = $type;
    }

    /**
     * @return user
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param user $user
     * @return \DhlInternational\Lib\AuthentificationType
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return signature
     */
    public function getSignature()
    {
      return $this->signature;
    }

    /**
     * @param signature $signature
     * @return \DhlInternational\Lib\AuthentificationType
     */
    public function setSignature($signature)
    {
      $this->signature = $signature;
      return $this;
    }

    /**
     * @return accountNumber
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param accountNumber $accountNumber
     * @return \DhlInternational\Lib\AuthentificationType
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return type
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param type $type
     * @return \DhlInternational\Lib\AuthentificationType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
