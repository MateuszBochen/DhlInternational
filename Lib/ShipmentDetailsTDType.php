<?php

namespace DhlInternational\Lib;

class ShipmentDetailsTDType extends ShipmentDetailsType
{

    /**
     * @var Account $Account
     */
    protected $Account = null;

    /**
     * @var Dutiable $Dutiable
     */
    protected $Dutiable = null;

    /**
     * @var string $DescriptionOfContent
     */
    protected $DescriptionOfContent = null;

    /**
     * @var AccountPaidBy $AccountPaidBy
     */
    protected $AccountPaidBy = null;

    /**
     * @var string $ShipmentReference
     */
    protected $ShipmentReference = null;

    /**
     * @var string $TermsOfTrade
     */
    protected $TermsOfTrade = null;

    /**
     * @var ShipmentItemTDType $ShipmentItem
     */
    protected $ShipmentItem = null;

    /**
     * @var ShipmentServiceTD $Service
     */
    protected $Service = null;

    /**
     * @var ShipmentNotificationType $Notification
     */
    protected $Notification = null;

    /**
     * @var string $NotificationEmailText
     */
    protected $NotificationEmailText = null;

    /**
     * @param string $ProductCode
     * @param ShipmentDate $ShipmentDate
     * @param DeclaredValueOfGoods $DeclaredValueOfGoods
     * @param string $DeclaredValueOfGoodsCurrency
     * @param Account $Account
     * @param Dutiable $Dutiable
     * @param string $DescriptionOfContent
     * @param AccountPaidBy $AccountPaidBy
     * @param string $ShipmentReference
     * @param string $TermsOfTrade
     * @param ShipmentItemTDType $ShipmentItem
     * @param ShipmentServiceTD $Service
     * @param ShipmentNotificationType $Notification
     * @param string $NotificationEmailText
     */
    public function __construct($ProductCode, $ShipmentDate, $DeclaredValueOfGoods, $DeclaredValueOfGoodsCurrency, $Account, $Dutiable, $DescriptionOfContent, $AccountPaidBy, $ShipmentReference, $TermsOfTrade, $ShipmentItem, $Service, $Notification, $NotificationEmailText)
    {
      parent::__construct($ProductCode, $ShipmentDate, $DeclaredValueOfGoods, $DeclaredValueOfGoodsCurrency);
      $this->Account = $Account;
      $this->Dutiable = $Dutiable;
      $this->DescriptionOfContent = $DescriptionOfContent;
      $this->AccountPaidBy = $AccountPaidBy;
      $this->ShipmentReference = $ShipmentReference;
      $this->TermsOfTrade = $TermsOfTrade;
      $this->ShipmentItem = $ShipmentItem;
      $this->Service = $Service;
      $this->Notification = $Notification;
      $this->NotificationEmailText = $NotificationEmailText;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param Account $Account
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return Dutiable
     */
    public function getDutiable()
    {
      return $this->Dutiable;
    }

    /**
     * @param Dutiable $Dutiable
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setDutiable($Dutiable)
    {
      $this->Dutiable = $Dutiable;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfContent()
    {
      return $this->DescriptionOfContent;
    }

    /**
     * @param string $DescriptionOfContent
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setDescriptionOfContent($DescriptionOfContent)
    {
      $this->DescriptionOfContent = $DescriptionOfContent;
      return $this;
    }

    /**
     * @return AccountPaidBy
     */
    public function getAccountPaidBy()
    {
      return $this->AccountPaidBy;
    }

    /**
     * @param AccountPaidBy $AccountPaidBy
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setAccountPaidBy($AccountPaidBy)
    {
      $this->AccountPaidBy = $AccountPaidBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentReference()
    {
      return $this->ShipmentReference;
    }

    /**
     * @param string $ShipmentReference
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setShipmentReference($ShipmentReference)
    {
      $this->ShipmentReference = $ShipmentReference;
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
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setTermsOfTrade($TermsOfTrade)
    {
      $this->TermsOfTrade = $TermsOfTrade;
      return $this;
    }

    /**
     * @return ShipmentItemTDType
     */
    public function getShipmentItem()
    {
      return $this->ShipmentItem;
    }

    /**
     * @param ShipmentItemTDType $ShipmentItem
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setShipmentItem($ShipmentItem)
    {
      $this->ShipmentItem = $ShipmentItem;
      return $this;
    }

    /**
     * @return ShipmentServiceTD
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param ShipmentServiceTD $Service
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return ShipmentNotificationType
     */
    public function getNotification()
    {
      return $this->Notification;
    }

    /**
     * @param ShipmentNotificationType $Notification
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setNotification($Notification)
    {
      $this->Notification = $Notification;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotificationEmailText()
    {
      return $this->NotificationEmailText;
    }

    /**
     * @param string $NotificationEmailText
     * @return \DhlInternational\Lib\ShipmentDetailsTDType
     */
    public function setNotificationEmailText($NotificationEmailText)
    {
      $this->NotificationEmailText = $NotificationEmailText;
      return $this;
    }

}
