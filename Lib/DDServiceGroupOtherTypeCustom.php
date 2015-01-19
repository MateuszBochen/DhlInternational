<?php

namespace DhlInternational\Lib;

class DDServiceGroupOtherTypeCustom
{

    /**
     * @var HigherInsurance $HigherInsurance
     */
    protected $HigherInsurance = null;

    /**
     * @var COD $COD
     */
    protected $COD = null;

    /**
     * @var Unfree $Unfree
     */
    protected $Unfree = null;

    /**
     * @var DangerousGoods $DangerousGoods
     */
    protected $DangerousGoods = null;

    /**
     * @var Bulkfreight $Bulkfreight
     */
    protected $Bulkfreight = null;

    /**
     * @var boolean $DirectInjection
     */
    protected $DirectInjection = null;

    /**
     * @var boolean $Bypass
     */
    protected $Bypass = null;

    /**
     * @param HigherInsurance $HigherInsurance
     * @param COD $COD
     * @param Unfree $Unfree
     * @param DangerousGoods $DangerousGoods
     * @param Bulkfreight $Bulkfreight
     * @param boolean $DirectInjection
     * @param boolean $Bypass
     */
    public function __construct($HigherInsurance = null, $COD = null, $Unfree = null, $DangerousGoods = null, $Bulkfreight = null, $DirectInjection = null, $Bypass = null)
    {
      $this->HigherInsurance = $HigherInsurance;
      $this->COD = $COD;
      $this->Unfree = $Unfree;
      $this->DangerousGoods = $DangerousGoods;
      $this->Bulkfreight = $Bulkfreight;
      $this->DirectInjection = $DirectInjection;
      $this->Bypass = $Bypass;
    }

    /**
     * @return HigherInsurance
     */
    public function getHigherInsurance()
    {
      return $this->HigherInsurance;
    }

    /**
     * @param HigherInsurance $HigherInsurance
     * @return \DhlInternational\Lib\DDServiceGroupOtherType
     */
    public function setHigherInsurance($HigherInsurance)
    {
      $this->HigherInsurance = $HigherInsurance;
      return $this;
    }

    /**
     * @return COD
     */
    public function getCOD()
    {
      return $this->COD;
    }

    /**
     * @param COD $COD
     * @return \DhlInternational\Lib\DDServiceGroupOtherType
     */
    public function setCOD($COD)
    {
      $this->COD = $COD;
      return $this;
    }

    /**
     * @return Unfree
     */
    public function getUnfree()
    {
      return $this->Unfree;
    }

    /**
     * @param Unfree $Unfree
     * @return \DhlInternational\Lib\DDServiceGroupOtherType
     */
    public function setUnfree($Unfree)
    {
      $this->Unfree = $Unfree;
      return $this;
    }

    /**
     * @return DangerousGoods
     */
    public function getDangerousGoods()
    {
      return $this->DangerousGoods;
    }

    /**
     * @param DangerousGoods $DangerousGoods
     * @return \DhlInternational\Lib\DDServiceGroupOtherType
     */
    public function setDangerousGoods($DangerousGoods)
    {
      $this->DangerousGoods = $DangerousGoods;
      return $this;
    }

    /**
     * @return Bulkfreight
     */
    public function getBulkfreight()
    {
      return $this->Bulkfreight;
    }

    /**
     * @param Bulkfreight $Bulkfreight
     * @return \DhlInternational\Lib\DDServiceGroupOtherType
     */
    public function setBulkfreight($Bulkfreight)
    {
      $this->Bulkfreight = $Bulkfreight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectInjection()
    {
      return $this->DirectInjection;
    }

    /**
     * @param boolean $DirectInjection
     * @return \DhlInternational\Lib\DDServiceGroupOtherType
     */
    public function setDirectInjection($DirectInjection)
    {
      $this->DirectInjection = $DirectInjection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBypass()
    {
      return $this->Bypass;
    }

    /**
     * @param boolean $Bypass
     * @return \DhlInternational\Lib\DDServiceGroupOtherType
     */
    public function setBypass($Bypass)
    {
      $this->Bypass = $Bypass;
      return $this;
    }

}
