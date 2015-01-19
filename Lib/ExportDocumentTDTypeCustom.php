<?php

namespace DhlInternational\Lib;

class ExportDocumentTDTypeCustom
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
     * @var string $SignerTitle
     */
    protected $SignerTitle = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $CommodityCode
     */
    protected $CommodityCode = null;

    /**
     * @var string $ExportReason
     */
    protected $ExportReason = null;

    /**
     * @var ExportDocPosition $ExportDocPosition
     */
    protected $ExportDocPosition = null;

    /**
     * @param InvoiceType $InvoiceType
     * @param InvoiceDate $InvoiceDate
     * @param string $InvoiceNumber
     * @param ExportType $ExportType
     * @param string $SignerTitle
     * @param string $Remark
     * @param string $CommodityCode
     * @param string $ExportReason
     * @param ExportDocPosition $ExportDocPosition
     */
    public function __construct($InvoiceType = null, $InvoiceDate = null, $InvoiceNumber = null, $ExportType = null, $SignerTitle = null, $Remark = null, $CommodityCode = null, $ExportReason = null, $ExportDocPosition = null)
    {
      $this->InvoiceType = $InvoiceType;
      $this->InvoiceDate = $InvoiceDate;
      $this->InvoiceNumber = $InvoiceNumber;
      $this->ExportType = $ExportType;
      $this->SignerTitle = $SignerTitle;
      $this->Remark = $Remark;
      $this->CommodityCode = $CommodityCode;
      $this->ExportReason = $ExportReason;
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
     * @return \DhlInternational\Lib\ExportDocumentTDType
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
     * @return \DhlInternational\Lib\ExportDocumentTDType
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
     * @return \DhlInternational\Lib\ExportDocumentTDType
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
     * @return \DhlInternational\Lib\ExportDocumentTDType
     */
    public function setExportType($ExportType)
    {
      $this->ExportType = $ExportType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignerTitle()
    {
      return $this->SignerTitle;
    }

    /**
     * @param string $SignerTitle
     * @return \DhlInternational\Lib\ExportDocumentTDType
     */
    public function setSignerTitle($SignerTitle)
    {
      $this->SignerTitle = $SignerTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return \DhlInternational\Lib\ExportDocumentTDType
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
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
     * @return \DhlInternational\Lib\ExportDocumentTDType
     */
    public function setCommodityCode($CommodityCode)
    {
      $this->CommodityCode = $CommodityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportReason()
    {
      return $this->ExportReason;
    }

    /**
     * @param string $ExportReason
     * @return \DhlInternational\Lib\ExportDocumentTDType
     */
    public function setExportReason($ExportReason)
    {
      $this->ExportReason = $ExportReason;
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
     * @return \DhlInternational\Lib\ExportDocumentTDType
     */
    public function setExportDocPosition($ExportDocPosition)
    {
      $this->ExportDocPosition = $ExportDocPosition;
      return $this;
    }

}
