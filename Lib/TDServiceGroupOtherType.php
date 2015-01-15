<?php

namespace DhlInternational\Lib;

class TDServiceGroupOtherType
{

    /**
     * @var Insurance $Insurance
     */
    protected $Insurance = null;

    /**
     * @var boolean $GoGreen
     */
    protected $GoGreen = null;

    /**
     * @param Insurance $Insurance
     * @param boolean $GoGreen
     */
    public function __construct($Insurance, $GoGreen)
    {
      $this->Insurance = $Insurance;
      $this->GoGreen = $GoGreen;
    }

    /**
     * @return Insurance
     */
    public function getInsurance()
    {
      return $this->Insurance;
    }

    /**
     * @param Insurance $Insurance
     * @return \DhlInternational\Lib\TDServiceGroupOtherType
     */
    public function setInsurance($Insurance)
    {
      $this->Insurance = $Insurance;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGoGreen()
    {
      return $this->GoGreen;
    }

    /**
     * @param boolean $GoGreen
     * @return \DhlInternational\Lib\TDServiceGroupOtherType
     */
    public function setGoGreen($GoGreen)
    {
      $this->GoGreen = $GoGreen;
      return $this;
    }

}
