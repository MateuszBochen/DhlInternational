<?php

namespace DhlInternational\Lib;

class DangerousGoods
{

    /**
     * @var string $DangerousGoodsClass
     */
    protected $DangerousGoodsClass = null;

    /**
     * @var string $DangerousGoodsPackagingType
     */
    protected $DangerousGoodsPackagingType = null;

    /**
     * @var string $DangerousGoodsUNCode
     */
    protected $DangerousGoodsUNCode = null;

    /**
     * @param string $DangerousGoodsClass
     * @param string $DangerousGoodsPackagingType
     * @param string $DangerousGoodsUNCode
     */
    public function __construct($DangerousGoodsClass, $DangerousGoodsPackagingType, $DangerousGoodsUNCode)
    {
      $this->DangerousGoodsClass = $DangerousGoodsClass;
      $this->DangerousGoodsPackagingType = $DangerousGoodsPackagingType;
      $this->DangerousGoodsUNCode = $DangerousGoodsUNCode;
    }

    /**
     * @return string
     */
    public function getDangerousGoodsClass()
    {
      return $this->DangerousGoodsClass;
    }

    /**
     * @param string $DangerousGoodsClass
     * @return \DhlInternational\Lib\DangerousGoods
     */
    public function setDangerousGoodsClass($DangerousGoodsClass)
    {
      $this->DangerousGoodsClass = $DangerousGoodsClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getDangerousGoodsPackagingType()
    {
      return $this->DangerousGoodsPackagingType;
    }

    /**
     * @param string $DangerousGoodsPackagingType
     * @return \DhlInternational\Lib\DangerousGoods
     */
    public function setDangerousGoodsPackagingType($DangerousGoodsPackagingType)
    {
      $this->DangerousGoodsPackagingType = $DangerousGoodsPackagingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDangerousGoodsUNCode()
    {
      return $this->DangerousGoodsUNCode;
    }

    /**
     * @param string $DangerousGoodsUNCode
     * @return \DhlInternational\Lib\DangerousGoods
     */
    public function setDangerousGoodsUNCode($DangerousGoodsUNCode)
    {
      $this->DangerousGoodsUNCode = $DangerousGoodsUNCode;
      return $this;
    }

}
