<?php

namespace DhlInternational\Lib;

class TDServiceGroupDateTimeOptionTypeCustom
{

    /**
     * @var ExpressSaturday $ExpressSaturday
     */
    protected $ExpressSaturday = null;

    /**
     * @param ExpressSaturday $ExpressSaturday
     */
    public function __construct($ExpressSaturday = null)
    {
      $this->ExpressSaturday = $ExpressSaturday;
    }

    /**
     * @return ExpressSaturday
     */
    public function getExpressSaturday()
    {
      return $this->ExpressSaturday;
    }

    /**
     * @param ExpressSaturday $ExpressSaturday
     * @return \DhlInternational\Lib\TDServiceGroupDateTimeOptionType
     */
    public function setExpressSaturday($ExpressSaturday)
    {
      $this->ExpressSaturday = $ExpressSaturday;
      return $this;
    }

}
