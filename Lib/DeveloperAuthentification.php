<?php

namespace DhlInternational\Lib;

class DeveloperAuthentification
{

    /**
     * @var string $DEVID
     */
    protected $DEVID = null;

    /**
     * @var string $APPID
     */
    protected $APPID = null;

    /**
     * @var string $CERTID
     */
    protected $CERTID = null;

    /**
     * @param string $DEVID
     * @param string $APPID
     * @param string $CERTID
     */
    public function __construct($DEVID, $APPID, $CERTID)
    {
      $this->DEVID = $DEVID;
      $this->APPID = $APPID;
      $this->CERTID = $CERTID;
    }

    /**
     * @return string
     */
    public function getDEVID()
    {
      return $this->DEVID;
    }

    /**
     * @param string $DEVID
     * @return \DhlInternational\Lib\DeveloperAuthentification
     */
    public function setDEVID($DEVID)
    {
      $this->DEVID = $DEVID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAPPID()
    {
      return $this->APPID;
    }

    /**
     * @param string $APPID
     * @return \DhlInternational\Lib\DeveloperAuthentification
     */
    public function setAPPID($APPID)
    {
      $this->APPID = $APPID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCERTID()
    {
      return $this->CERTID;
    }

    /**
     * @param string $CERTID
     * @return \DhlInternational\Lib\DeveloperAuthentification
     */
    public function setCERTID($CERTID)
    {
      $this->CERTID = $CERTID;
      return $this;
    }

}
