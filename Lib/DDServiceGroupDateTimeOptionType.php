<?php

namespace DhlInternational\Lib;

class DDServiceGroupDateTimeOptionType
{

    /**
     * @var DeliveryOnTime $DeliveryOnTime
     */
    protected $DeliveryOnTime = null;

    /**
     * @var boolean $DeliveryEarly
     */
    protected $DeliveryEarly = null;

    /**
     * @var boolean $Express0900
     */
    protected $Express0900 = null;

    /**
     * @var boolean $Express1000
     */
    protected $Express1000 = null;

    /**
     * @var boolean $Express1200
     */
    protected $Express1200 = null;

    /**
     * @var boolean $DeliveryAfternoon
     */
    protected $DeliveryAfternoon = null;

    /**
     * @var boolean $DeliveryEvening
     */
    protected $DeliveryEvening = null;

    /**
     * @var boolean $ExpressSaturday
     */
    protected $ExpressSaturday = null;

    /**
     * @var boolean $ExpressSunday
     */
    protected $ExpressSunday = null;

    /**
     * @param DeliveryOnTime $DeliveryOnTime
     * @param boolean $DeliveryEarly
     * @param boolean $Express0900
     * @param boolean $Express1000
     * @param boolean $Express1200
     * @param boolean $DeliveryAfternoon
     * @param boolean $DeliveryEvening
     * @param boolean $ExpressSaturday
     * @param boolean $ExpressSunday
     */
    public function __construct($DeliveryOnTime, $DeliveryEarly, $Express0900, $Express1000, $Express1200, $DeliveryAfternoon, $DeliveryEvening, $ExpressSaturday, $ExpressSunday)
    {
      $this->DeliveryOnTime = $DeliveryOnTime;
      $this->DeliveryEarly = $DeliveryEarly;
      $this->Express0900 = $Express0900;
      $this->Express1000 = $Express1000;
      $this->Express1200 = $Express1200;
      $this->DeliveryAfternoon = $DeliveryAfternoon;
      $this->DeliveryEvening = $DeliveryEvening;
      $this->ExpressSaturday = $ExpressSaturday;
      $this->ExpressSunday = $ExpressSunday;
    }

    /**
     * @return DeliveryOnTime
     */
    public function getDeliveryOnTime()
    {
      return $this->DeliveryOnTime;
    }

    /**
     * @param DeliveryOnTime $DeliveryOnTime
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setDeliveryOnTime($DeliveryOnTime)
    {
      $this->DeliveryOnTime = $DeliveryOnTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryEarly()
    {
      return $this->DeliveryEarly;
    }

    /**
     * @param boolean $DeliveryEarly
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setDeliveryEarly($DeliveryEarly)
    {
      $this->DeliveryEarly = $DeliveryEarly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpress0900()
    {
      return $this->Express0900;
    }

    /**
     * @param boolean $Express0900
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setExpress0900($Express0900)
    {
      $this->Express0900 = $Express0900;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpress1000()
    {
      return $this->Express1000;
    }

    /**
     * @param boolean $Express1000
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setExpress1000($Express1000)
    {
      $this->Express1000 = $Express1000;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpress1200()
    {
      return $this->Express1200;
    }

    /**
     * @param boolean $Express1200
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setExpress1200($Express1200)
    {
      $this->Express1200 = $Express1200;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryAfternoon()
    {
      return $this->DeliveryAfternoon;
    }

    /**
     * @param boolean $DeliveryAfternoon
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setDeliveryAfternoon($DeliveryAfternoon)
    {
      $this->DeliveryAfternoon = $DeliveryAfternoon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryEvening()
    {
      return $this->DeliveryEvening;
    }

    /**
     * @param boolean $DeliveryEvening
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setDeliveryEvening($DeliveryEvening)
    {
      $this->DeliveryEvening = $DeliveryEvening;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressSaturday()
    {
      return $this->ExpressSaturday;
    }

    /**
     * @param boolean $ExpressSaturday
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setExpressSaturday($ExpressSaturday)
    {
      $this->ExpressSaturday = $ExpressSaturday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressSunday()
    {
      return $this->ExpressSunday;
    }

    /**
     * @param boolean $ExpressSunday
     * @return \DhlInternational\Lib\DDServiceGroupDateTimeOptionType
     */
    public function setExpressSunday($ExpressSunday)
    {
      $this->ExpressSunday = $ExpressSunday;
      return $this;
    }

}
