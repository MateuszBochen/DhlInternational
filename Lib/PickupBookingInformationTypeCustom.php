<?php

namespace DhlInternational\Lib;

class PickupBookingInformationTypeCustom
{

    /**
     * @var ProductID $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $Account
     */
    protected $Account = null;

    /**
     * @var string $Attendance
     */
    protected $Attendance = null;

    /**
     * @var PickupDate $PickupDate
     */
    protected $PickupDate = null;

    /**
     * @var ReadyByTime $ReadyByTime
     */
    protected $ReadyByTime = null;

    /**
     * @var ClosingTime $ClosingTime
     */
    protected $ClosingTime = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $PickupLocation
     */
    protected $PickupLocation = null;

    /**
     * @var AmountOfPieces $AmountOfPieces
     */
    protected $AmountOfPieces = null;

    /**
     * @var AmountOfPallets $AmountOfPallets
     */
    protected $AmountOfPallets = null;

    /**
     * @var WeightInKG $WeightInKG
     */
    protected $WeightInKG = null;

    /**
     * @var CountOfShipments $CountOfShipments
     */
    protected $CountOfShipments = null;

    /**
     * @var TotalVolumeWeight $TotalVolumeWeight
     */
    protected $TotalVolumeWeight = null;

    /**
     * @var MaxLengthInCM $MaxLengthInCM
     */
    protected $MaxLengthInCM = null;

    /**
     * @var MaxWidthInCM $MaxWidthInCM
     */
    protected $MaxWidthInCM = null;

    /**
     * @var MaxHeightInCM $MaxHeightInCM
     */
    protected $MaxHeightInCM = null;

    /**
     * @param ProductID $ProductID
     * @param string $Account
     * @param string $Attendance
     * @param PickupDate $PickupDate
     * @param ReadyByTime $ReadyByTime
     * @param ClosingTime $ClosingTime
     * @param string $Remark
     * @param string $PickupLocation
     * @param AmountOfPieces $AmountOfPieces
     * @param AmountOfPallets $AmountOfPallets
     * @param WeightInKG $WeightInKG
     * @param CountOfShipments $CountOfShipments
     * @param TotalVolumeWeight $TotalVolumeWeight
     * @param MaxLengthInCM $MaxLengthInCM
     * @param MaxWidthInCM $MaxWidthInCM
     * @param MaxHeightInCM $MaxHeightInCM
     */
    public function __construct($ProductID = null, $Account = null, $Attendance = null, $PickupDate = null, $ReadyByTime = null, $ClosingTime = null, $Remark = null, $PickupLocation = null, $AmountOfPieces = null, $AmountOfPallets = null, $WeightInKG = null, $CountOfShipments = null, $TotalVolumeWeight = null, $MaxLengthInCM = null, $MaxWidthInCM = null, $MaxHeightInCM = null)
    {
      $this->ProductID = $ProductID;
      $this->Account = $Account;
      $this->Attendance = $Attendance;
      $this->PickupDate = $PickupDate;
      $this->ReadyByTime = $ReadyByTime;
      $this->ClosingTime = $ClosingTime;
      $this->Remark = $Remark;
      $this->PickupLocation = $PickupLocation;
      $this->AmountOfPieces = $AmountOfPieces;
      $this->AmountOfPallets = $AmountOfPallets;
      $this->WeightInKG = $WeightInKG;
      $this->CountOfShipments = $CountOfShipments;
      $this->TotalVolumeWeight = $TotalVolumeWeight;
      $this->MaxLengthInCM = $MaxLengthInCM;
      $this->MaxWidthInCM = $MaxWidthInCM;
      $this->MaxHeightInCM = $MaxHeightInCM;
    }

    /**
     * @return ProductID
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param ProductID $ProductID
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param string $Account
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttendance()
    {
      return $this->Attendance;
    }

    /**
     * @param string $Attendance
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setAttendance($Attendance)
    {
      $this->Attendance = $Attendance;
      return $this;
    }

    /**
     * @return PickupDate
     */
    public function getPickupDate()
    {
      return $this->PickupDate;
    }

    /**
     * @param PickupDate $PickupDate
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setPickupDate($PickupDate)
    {
      $this->PickupDate = $PickupDate;
      return $this;
    }

    /**
     * @return ReadyByTime
     */
    public function getReadyByTime()
    {
      return $this->ReadyByTime;
    }

    /**
     * @param ReadyByTime $ReadyByTime
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setReadyByTime($ReadyByTime)
    {
      $this->ReadyByTime = $ReadyByTime;
      return $this;
    }

    /**
     * @return ClosingTime
     */
    public function getClosingTime()
    {
      return $this->ClosingTime;
    }

    /**
     * @param ClosingTime $ClosingTime
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setClosingTime($ClosingTime)
    {
      $this->ClosingTime = $ClosingTime;
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
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocation()
    {
      return $this->PickupLocation;
    }

    /**
     * @param string $PickupLocation
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setPickupLocation($PickupLocation)
    {
      $this->PickupLocation = $PickupLocation;
      return $this;
    }

    /**
     * @return AmountOfPieces
     */
    public function getAmountOfPieces()
    {
      return $this->AmountOfPieces;
    }

    /**
     * @param AmountOfPieces $AmountOfPieces
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setAmountOfPieces($AmountOfPieces)
    {
      $this->AmountOfPieces = $AmountOfPieces;
      return $this;
    }

    /**
     * @return AmountOfPallets
     */
    public function getAmountOfPallets()
    {
      return $this->AmountOfPallets;
    }

    /**
     * @param AmountOfPallets $AmountOfPallets
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setAmountOfPallets($AmountOfPallets)
    {
      $this->AmountOfPallets = $AmountOfPallets;
      return $this;
    }

    /**
     * @return WeightInKG
     */
    public function getWeightInKG()
    {
      return $this->WeightInKG;
    }

    /**
     * @param WeightInKG $WeightInKG
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setWeightInKG($WeightInKG)
    {
      $this->WeightInKG = $WeightInKG;
      return $this;
    }

    /**
     * @return CountOfShipments
     */
    public function getCountOfShipments()
    {
      return $this->CountOfShipments;
    }

    /**
     * @param CountOfShipments $CountOfShipments
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setCountOfShipments($CountOfShipments)
    {
      $this->CountOfShipments = $CountOfShipments;
      return $this;
    }

    /**
     * @return TotalVolumeWeight
     */
    public function getTotalVolumeWeight()
    {
      return $this->TotalVolumeWeight;
    }

    /**
     * @param TotalVolumeWeight $TotalVolumeWeight
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setTotalVolumeWeight($TotalVolumeWeight)
    {
      $this->TotalVolumeWeight = $TotalVolumeWeight;
      return $this;
    }

    /**
     * @return MaxLengthInCM
     */
    public function getMaxLengthInCM()
    {
      return $this->MaxLengthInCM;
    }

    /**
     * @param MaxLengthInCM $MaxLengthInCM
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setMaxLengthInCM($MaxLengthInCM)
    {
      $this->MaxLengthInCM = $MaxLengthInCM;
      return $this;
    }

    /**
     * @return MaxWidthInCM
     */
    public function getMaxWidthInCM()
    {
      return $this->MaxWidthInCM;
    }

    /**
     * @param MaxWidthInCM $MaxWidthInCM
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setMaxWidthInCM($MaxWidthInCM)
    {
      $this->MaxWidthInCM = $MaxWidthInCM;
      return $this;
    }

    /**
     * @return MaxHeightInCM
     */
    public function getMaxHeightInCM()
    {
      return $this->MaxHeightInCM;
    }

    /**
     * @param MaxHeightInCM $MaxHeightInCM
     * @return \DhlInternational\Lib\PickupBookingInformationType
     */
    public function setMaxHeightInCM($MaxHeightInCM)
    {
      $this->MaxHeightInCM = $MaxHeightInCM;
      return $this;
    }

}
