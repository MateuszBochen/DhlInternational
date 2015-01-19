<?php

namespace DhlInternational\Lib;

class IdentityCardCustom
{

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var string $CardAuthority
     */
    protected $CardAuthority = null;

    /**
     * @param string $CardNumber
     * @param string $CardAuthority
     */
    public function __construct($CardNumber = null, $CardAuthority = null)
    {
      $this->CardNumber = $CardNumber;
      $this->CardAuthority = $CardAuthority;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \DhlInternational\Lib\IdentityCard
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardAuthority()
    {
      return $this->CardAuthority;
    }

    /**
     * @param string $CardAuthority
     * @return \DhlInternational\Lib\IdentityCard
     */
    public function setCardAuthority($CardAuthority)
    {
      $this->CardAuthority = $CardAuthority;
      return $this;
    }

}
