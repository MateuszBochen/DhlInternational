<?php

namespace DhlInternational\Lib;

class UpdateShipmentResponseCustom
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
    public function __construct($Version = null, $status = null, $CreationState = null)
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
     * @return \DhlInternational\Lib\UpdateShipmentResponse
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
     * @return \DhlInternational\Lib\UpdateShipmentResponse
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
     * @return \DhlInternational\Lib\UpdateShipmentResponse
     */
    public function setCreationState($CreationState)
    {
      $this->CreationState = $CreationState;
      return $this;
    }

}
