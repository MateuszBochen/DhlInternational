<?php

namespace DhlInternational\Lib;

class CancelPickupResponseCustom
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @var Statusinformation $Status
     */
    protected $Status = null;

    /**
     * @param Version $Version
     * @param Statusinformation $Status
     */
    public function __construct($Version = null, $Status = null)
    {
      $this->Version = $Version;
      $this->Status = $Status;
    }

    /**
     * @return Version
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param Version $Version
     * @return \DhlInternational\Lib\CancelPickupResponse
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return Statusinformation
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Statusinformation $Status
     * @return \DhlInternational\Lib\CancelPickupResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
