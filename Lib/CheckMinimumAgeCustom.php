<?php

namespace DhlInternational\Lib;

class CheckMinimumAgeCustom
{

    /**
     * @var string $MinimumAge
     */
    protected $MinimumAge = null;

    /**
     * @param string $MinimumAge
     */
    public function __construct($MinimumAge = null)
    {
      $this->MinimumAge = $MinimumAge;
    }

    /**
     * @return string
     */
    public function getMinimumAge()
    {
      return $this->MinimumAge;
    }

    /**
     * @param string $MinimumAge
     * @return \DhlInternational\Lib\CheckMinimumAge
     */
    public function setMinimumAge($MinimumAge)
    {
      $this->MinimumAge = $MinimumAge;
      return $this;
    }

}
