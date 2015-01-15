<?php

namespace DhlInternational\Lib;

class DeliveryOnTime
{

    /**
     * @var string $time
     */
    protected $time = null;

    /**
     * @param string $time
     */
    public function __construct($time)
    {
      $this->time = $time;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param string $time
     * @return \DhlInternational\Lib\DeliveryOnTime
     */
    public function setTime($time)
    {
      $this->time = $time;
      return $this;
    }

}
