<?php

namespace DhlInternational\Lib;

class ExportDocumentDDTypeCustom
{

    /**
     * @var InvoiceType $InvoiceType
     */
    protected $InvoiceType = null;

    /**
     * @var InvoiceDate $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var ExportType $ExportType
     */
    protected $ExportType = null;

    /**
     * @var string $ExportTypeDescription
     */
    protected $ExportTypeDescription = null;

    /**
     * @var string $CommodityCode
     */
    protected $CommodityCode = null;

    /**
     * @var string $TermsOfTrade
     */
    protected $TermsOfTrade = null;

    /**
     * @var Amount $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $CountryCodeOrigin
     */
    protected $CountryCodeOrigin = null;

    /**
     * @var AdditionalFee $AdditionalFee
     */
    protected $AdditionalFee = null;

    /**
     * @var CustomsValue $CustomsValue
     */
    protected $CustomsValue = null;

    /**
     * @var string $CustomsCurrency
     */
    protected $CustomsCurrency = null;

    /**
     * @var string $PermitNumber
     */
    protected $PermitNumber = null;

    /**
     * @var string $AttestationNumber
     */
    protected $AttestationNumber = null;

    /**
     * @var boolean $WithElectronicExportNtfctn
     */
    protected $WithElectronicExportNtfctn = null;

    /**
     * @var string $MRNNumber
     */
    protected $MRNNumber = null;

    /**
     * @var ExportDocPosition $ExportDocPosition
     */
    protected $ExportDocPosition = null;

    /**
     * @param InvoiceType $InvoiceType
     * @param InvoiceDate $InvoiceDate
     * @param string $InvoiceNumber
     * @param ExportType $ExportType
     * @param string $ExportTypeDescription
     * @param string $CommodityCode
     * @param string $TermsOfTrade
     * @param Amount $Amount
     * @param string $Description
     * @param string $CountryCodeOrigin
     * @param AdditionalFee $AdditionalFee
     * @param CustomsValue $CustomsValue
     * @param string $CustomsCurrency
     * @param string $PermitNumber
     * @param string $AttestationNumber
     * @param boolean $WithElectronicExportNtfctn
     * @param string $MRNNumber
     * @param ExportDocPosition $ExportDocPosition
     */
    public function __construct($InvoiceType = null, $InvoiceDate = null, $InvoiceNumber = null, $ExportType = null, $ExportTypeDescription = null, $CommodityCode = null, $TermsOfTrade = null, $Amount = null, $Description = null, $CountryCodeOrigin = null, $AdditionalFee = null, $CustomsValue = null, $CustomsCurrency = null, $PermitNumber = null, $AttestationNumber = null, $WithElectronicExportNtfctn = null, $MRNNumber = null, $ExportDocPosition = null)
    {
      $this->InvoiceType = $InvoiceType;
      $this->InvoiceDate = $InvoiceDate;
      $this->InvoiceNumber = $InvoiceNumber;
      $this->ExportType = $ExportType;
      $this->ExportTypeDescription = $ExportTypeDescription;
      $this->CommodityCode = $CommodityCode;
      $this->TermsOfTrade = $TermsOfTrade;
      $this->Amount = $Amount;
      $this->Description = $Description;
      $this->CountryCodeOrigin = $CountryCodeOrigin;
      $this->AdditionalFee = $AdditionalFee;
      $this->CustomsValue = $CustomsValue;
      $this->CustomsCurrency = $CustomsCurrency;
      $this->PermitNumber = $PermitNumber;
      $this->AttestationNumber = $AttestationNumber;
      $this->WithElectronicExportNtfctn = $WithElectronicExportNtfctn;
      $this->MRNNumber = $MRNNumber;
      $this->ExportDocPosition = $ExportDocPosition;
    }

    /**
     * @return InvoiceType
     */
    public function getInvoiceType()
    {
      return $this->InvoiceType;
    }

    /**
     * @param InvoiceType $InvoiceType
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setInvoiceType($InvoiceType)
    {
      $this->InvoiceType = $InvoiceType;
      return $this;
    }

    /**
     * @return InvoiceDate
     */
    public function getInvoiceDate()
    {
      return $this->InvoiceDate;
    }

    /**
     * @param InvoiceDate $InvoiceDate
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setInvoiceDate($InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return ExportType
     */
    public function getExportType()
    {
      return $this->ExportType;
    }

    /**
     * @param ExportType $ExportType
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setExportType($ExportType)
    {
      $this->ExportType = $ExportType;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportTypeDescription()
    {
      return $this->ExportTypeDescription;
    }

    /**
     * @param string $ExportTypeDescription
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setExportTypeDescription($ExportTypeDescription)
    {
      $this->ExportTypeDescription = $ExportTypeDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommodityCode()
    {
      return $this->CommodityCode;
    }

    /**
     * @param string $CommodityCode
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setCommodityCode($CommodityCode)
    {
      $this->CommodityCode = $CommodityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfTrade()
    {
      return $this->TermsOfTrade;
    }

    /**
     * @param string $TermsOfTrade
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setTermsOfTrade($TermsOfTrade)
    {
      $this->TermsOfTrade = $TermsOfTrade;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param Amount $Amount
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCodeOrigin()
    {
      return $this->CountryCodeOrigin;
    }

    /**
     * @param string $CountryCodeOrigin
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setCountryCodeOrigin($CountryCodeOrigin)
    {
      $this->CountryCodeOrigin = $CountryCodeOrigin;
      return $this;
    }

    /**
     * @return AdditionalFee
     */
    public function getAdditionalFee()
    {
      return $this->AdditionalFee;
    }

    /**
     * @param AdditionalFee $AdditionalFee
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setAdditionalFee($AdditionalFee)
    {
      $this->AdditionalFee = $AdditionalFee;
      return $this;
    }

    /**
     * @return CustomsValue
     */
    public function getCustomsValue()
    {
      return $this->CustomsValue;
    }

    /**
     * @param CustomsValue $CustomsValue
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setCustomsValue($CustomsValue)
    {
      $this->CustomsValue = $CustomsValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsCurrency()
    {
      return $this->CustomsCurrency;
    }

    /**
     * @param string $CustomsCurrency
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setCustomsCurrency($CustomsCurrency)
    {
      $this->CustomsCurrency = $CustomsCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getPermitNumber()
    {
      return $this->PermitNumber;
    }

    /**
     * @param string $PermitNumber
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setPermitNumber($PermitNumber)
    {
      $this->PermitNumber = $PermitNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttestationNumber()
    {
      return $this->AttestationNumber;
    }

    /**
     * @param string $AttestationNumber
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setAttestationNumber($AttestationNumber)
    {
      $this->AttestationNumber = $AttestationNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWithElectronicExportNtfctn()
    {
      return $this->WithElectronicExportNtfctn;
    }

    /**
     * @param boolean $WithElectronicExportNtfctn
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setWithElectronicExportNtfctn($WithElectronicExportNtfctn)
    {
      $this->WithElectronicExportNtfctn = $WithElectronicExportNtfctn;
      return $this;
    }

    /**
     * @return string
     */
    public function getMRNNumber()
    {
      return $this->MRNNumber;
    }

    /**
     * @param string $MRNNumber
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setMRNNumber($MRNNumber)
    {
      $this->MRNNumber = $MRNNumber;
      return $this;
    }

    /**
     * @return ExportDocPosition
     */
    public function getExportDocPosition()
    {
      return $this->ExportDocPosition;
    }

    /**
     * @param ExportDocPosition $ExportDocPosition
     * @return \DhlInternational\Lib\ExportDocumentDDType
     */
    public function setExportDocPosition($ExportDocPosition)
    {
      $this->ExportDocPosition = $ExportDocPosition;
      return $this;
    }

}
