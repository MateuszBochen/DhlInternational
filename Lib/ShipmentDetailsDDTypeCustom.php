<?php

namespace DhlInternational\Lib;

class ShipmentDetailsDDTypeCustom extends ShipmentDetailsTypeCustom
{

    /**
     * @var EKP $EKP
     */
    protected $EKP = null;

    /**
     * @var Attendance $Attendance
     */
    protected $Attendance = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DeliveryRemarks
     */
    protected $DeliveryRemarks = null;

    /**
     * @var ShipmentItemDDType $ShipmentItem
     */
    protected $ShipmentItem = null;

    /**
     * @var ShipmentServiceDD $Service
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
     * @var BankType $BankData
     */
    protected $BankData = null;

    /**
     * @param string $ProductCode
     * @param ShipmentDate $ShipmentDate
     * @param DeclaredValueOfGoods $DeclaredValueOfGoods
     * @param string $DeclaredValueOfGoodsCurrency
     * @param EKP $EKP
     * @param Attendance $Attendance
     * @param string $CustomerReference
     * @param string $Description
     * @param string $DeliveryRemarks
     * @param ShipmentItemDDType $ShipmentItem
     * @param ShipmentServiceDD $Service
     * @param ShipmentNotificationType $Notification
     * @param string $NotificationEmailText
     * @param BankType $BankData
     */
    public function __construct($ProductCode = null, $ShipmentDate = null, $DeclaredValueOfGoods = null, $DeclaredValueOfGoodsCurrency = null, $EKP = null, $Attendance = null, $CustomerReference = null, $Description = null, $DeliveryRemarks = null, $ShipmentItem = null, $Service = null, $Notification = null, $NotificationEmailText = null, $BankData = null)
    {
      parent::__construct($ProductCode, $ShipmentDate, $DeclaredValueOfGoods, $DeclaredValueOfGoodsCurrency);
      $this->EKP = $EKP;
      $this->Attendance = $Attendance;
      $this->CustomerReference = $CustomerReference;
      $this->Description = $Description;
      $this->DeliveryRemarks = $DeliveryRemarks;
      $this->ShipmentItem = $ShipmentItem;
      $this->Service = $Service;
      $this->Notification = $Notification;
      $this->NotificationEmailText = $NotificationEmailText;
      $this->BankData = $BankData;
    }

    /**
     * @return EKP
     */
    public function getEKP()
    {
      return $this->EKP;
    }

    /**
     * @param EKP $EKP
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
     */
    public function setEKP($EKP)
    {
      $this->EKP = $EKP;
      return $this;
    }

    /**
     * @return Attendance
     */
    public function getAttendance()
    {
      return $this->Attendance;
    }

    /**
     * @param Attendance $Attendance
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
     */
    public function setAttendance($Attendance)
    {
      $this->Attendance = $Attendance;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
      return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
     */
    public function setCustomerReference($CustomerReference)
    {
      $this->CustomerReference = $CustomerReference;
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
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryRemarks()
    {
      return $this->DeliveryRemarks;
    }

    /**
     * @param string $DeliveryRemarks
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
     */
    public function setDeliveryRemarks($DeliveryRemarks)
    {
      $this->DeliveryRemarks = $DeliveryRemarks;
      return $this;
    }

    /**
     * @return ShipmentItemDDType
     */
    public function getShipmentItem()
    {
      return $this->ShipmentItem;
    }

    /**
     * @param ShipmentItemDDType $ShipmentItem
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
     */
    public function setShipmentItem($ShipmentItem)
    {
      $this->ShipmentItem = $ShipmentItem;
      return $this;
    }

    /**
     * @return ShipmentServiceDD
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param ShipmentServiceDD $Service
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
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
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
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
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
     */
    public function setNotificationEmailText($NotificationEmailText)
    {
      $this->NotificationEmailText = $NotificationEmailText;
      return $this;
    }

    /**
     * @return BankType
     */
    public function getBankData()
    {
      return $this->BankData;
    }

    /**
     * @param BankType $BankData
     * @return \DhlInternational\Lib\ShipmentDetailsDDType
     */
    public function setBankData($BankData)
    {
      $this->BankData = $BankData;
      return $this;
    }

}
