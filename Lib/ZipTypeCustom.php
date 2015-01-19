<?php

namespace DhlInternational\Lib;

class ZipTypeCustom
{

    /**
     * @var germany $germany
     */
    protected $germany = null;

    /**
     * @var england $england
     */
    protected $england = null;

    /**
     * @var other $other
     */
    protected $other = null;

    /**
     * @param germany $germany
     * @param england $england
     * @param other $other
     */
    public function __construct($germany = null, $england = null, $other = null)
    {
      $this->germany = $germany;
      $this->england = $england;
      $this->other = $other;
    }

    /**
     * @return germany
     */
    public function getGermany()
    {
      return $this->germany;
    }

    /**
     * @param germany $germany
     * @return \DhlInternational\Lib\ZipType
     */
    public function setGermany($germany)
    {
      $this->germany = $germany;
      return $this;
    }

    /**
     * @return england
     */
    public function getEngland()
    {
      return $this->england;
    }

    /**
     * @param england $england
     * @return \DhlInternational\Lib\ZipType
     */
    public function setEngland($england)
    {
      $this->england = $england;
      return $this;
    }

    /**
     * @return other
     */
    public function getOther()
    {
      return $this->other;
    }

    /**
     * @param other $other
     * @return \DhlInternational\Lib\ZipType
     */
    public function setOther($other)
    {
      $this->other = $other;
      return $this;
    }

}
