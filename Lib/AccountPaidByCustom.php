<?php

namespace DhlInternational\Lib;

class AccountPaidByCustom
{

    /**
     * @var accountNumberExpress $accountNumberExpress
     */
    protected $accountNumberExpress = null;

    /**
     * @param accountNumberExpress $accountNumberExpress
     */
    public function __construct($accountNumberExpress = null)
    {
      $this->accountNumberExpress = $accountNumberExpress;
    }

    /**
     * @return accountNumberExpress
     */
    public function getAccountNumberExpress()
    {
      return $this->accountNumberExpress;
    }

    /**
     * @param accountNumberExpress $accountNumberExpress
     * @return \DhlInternational\Lib\AccountPaidBy
     */
    public function setAccountNumberExpress($accountNumberExpress)
    {
      $this->accountNumberExpress = $accountNumberExpress;
      return $this;
    }

}
