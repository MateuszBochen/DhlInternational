<?php

namespace DhlInternational\Lib;

class ShipmentDetailsTypeCustom
{

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var ShipmentDate $ShipmentDate
     */
    protected $ShipmentDate = null;

    /**
     * @var DeclaredValueOfGoods $DeclaredValueOfGoods
     */
    protected $DeclaredValueOfGoods = null;

    /**
     * @var string $DeclaredValueOfGoodsCurrency
     */
    protected $DeclaredValueOfGoodsCurrency = null;

    /**
     * @param string $ProductCode
     * @param ShipmentDate $ShipmentDate
     * @param DeclaredValueOfGoods $DeclaredValueOfGoods
     * @param string $DeclaredValueOfGoodsCurrency
     */
    public function __construct($ProductCode = null, $ShipmentDate = null, $DeclaredValueOfGoods = null, $DeclaredValueOfGoodsCurrency = null)
    {
      $this->ProductCode = $ProductCode;
      $this->ShipmentDate = $ShipmentDate;
      $this->DeclaredValueOfGoods = $DeclaredValueOfGoods;
      $this->DeclaredValueOfGoodsCurrency = $DeclaredValueOfGoodsCurrency;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return \DhlInternational\Lib\ShipmentDetailsType
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

    /**
     * @return ShipmentDate
     */
    public function getShipmentDate()
    {
      return $this->ShipmentDate;
    }

    /**
     * @param ShipmentDate $ShipmentDate
     * @return \DhlInternational\Lib\ShipmentDetailsType
     */
    public function setShipmentDate($ShipmentDate)
    {
      $this->ShipmentDate = $ShipmentDate;
      return $this;
    }

    /**
     * @return DeclaredValueOfGoods
     */
    public function getDeclaredValueOfGoods()
    {
      return $this->DeclaredValueOfGoods;
    }

    /**
     * @param DeclaredValueOfGoods $DeclaredValueOfGoods
     * @return \DhlInternational\Lib\ShipmentDetailsType
     */
    public function setDeclaredValueOfGoods($DeclaredValueOfGoods)
    {
      $this->DeclaredValueOfGoods = $DeclaredValueOfGoods;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeclaredValueOfGoodsCurrency()
    {
      return $this->DeclaredValueOfGoodsCurrency;
    }

    /**
     * @param string $DeclaredValueOfGoodsCurrency
     * @return \DhlInternational\Lib\ShipmentDetailsType
     */
    public function setDeclaredValueOfGoodsCurrency($DeclaredValueOfGoodsCurrency)
    {
      $this->DeclaredValueOfGoodsCurrency = $DeclaredValueOfGoodsCurrency;
      return $this;
    }

}
