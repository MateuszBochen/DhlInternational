<?php

namespace DhlInternational\Lib;

class BankType
{

    /**
     * @var string $accountOwner
     */
    protected $accountOwner = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $bankCode
     */
    protected $bankCode = null;

    /**
     * @var string $bankName
     */
    protected $bankName = null;

    /**
     * @var string $iban
     */
    protected $iban = null;

    /**
     * @var note $note
     */
    protected $note = null;

    /**
     * @var bic $bic
     */
    protected $bic = null;

    /**
     * @param string $accountOwner
     * @param string $accountNumber
     * @param string $bankCode
     * @param string $bankName
     * @param string $iban
     * @param note $note
     * @param bic $bic
     */
    public function __construct($accountOwner, $accountNumber, $bankCode, $bankName, $iban, $note, $bic)
    {
      $this->accountOwner = $accountOwner;
      $this->accountNumber = $accountNumber;
      $this->bankCode = $bankCode;
      $this->bankName = $bankName;
      $this->iban = $iban;
      $this->note = $note;
      $this->bic = $bic;
    }

    /**
     * @return string
     */
    public function getAccountOwner()
    {
      return $this->accountOwner;
    }

    /**
     * @param string $accountOwner
     * @return \DhlInternational\Lib\BankType
     */
    public function setAccountOwner($accountOwner)
    {
      $this->accountOwner = $accountOwner;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \DhlInternational\Lib\BankType
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
      return $this->bankCode;
    }

    /**
     * @param string $bankCode
     * @return \DhlInternational\Lib\BankType
     */
    public function setBankCode($bankCode)
    {
      $this->bankCode = $bankCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return \DhlInternational\Lib\BankType
     */
    public function setBankName($bankName)
    {
      $this->bankName = $bankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getIban()
    {
      return $this->iban;
    }

    /**
     * @param string $iban
     * @return \DhlInternational\Lib\BankType
     */
    public function setIban($iban)
    {
      $this->iban = $iban;
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
     * @return \DhlInternational\Lib\BankType
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

    /**
     * @return bic
     */
    public function getBic()
    {
      return $this->bic;
    }

    /**
     * @param bic $bic
     * @return \DhlInternational\Lib\BankType
     */
    public function setBic($bic)
    {
      $this->bic = $bic;
      return $this;
    }

}
