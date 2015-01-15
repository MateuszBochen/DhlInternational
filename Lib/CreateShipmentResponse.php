<?php

namespace DhlInternational\Lib;

class CreateShipmentResponse
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @var Statusinformation $status
     */
    protected $status = null;

    /**
     * @var CreationState $CreationState
     */
    protected $CreationState = null;

    /**
     * @param Version $Version
     * @param Statusinformation $status
     * @param CreationState $CreationState
     */
    public function __construct($Version, $status, $CreationState)
    {
      $this->Version = $Version;
      $this->status = $status;
      $this->CreationState = $CreationState;
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
     * @return \DhlInternational\Lib\CreateShipmentResponse
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
      return $this->status;
    }

    /**
     * @param Statusinformation $status
     * @return \DhlInternational\Lib\CreateShipmentResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return CreationState
     */
    public function getCreationState()
    {
      return $this->CreationState;
    }

    /**
     * @param CreationState $CreationState
     * @return \DhlInternational\Lib\CreateShipmentResponse
     */
    public function setCreationState($CreationState)
    {
      $this->CreationState = $CreationState;
      return $this;
    }

}
