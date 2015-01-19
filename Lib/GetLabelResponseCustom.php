<?php

namespace DhlInternational\Lib;

class GetLabelResponseCustom
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
     * @var LabelData $LabelData
     */
    protected $LabelData = null;

    /**
     * @param Version $Version
     * @param Statusinformation $status
     * @param LabelData $LabelData
     */
    public function __construct($Version = null, $status = null, $LabelData = null)
    {
      $this->Version = $Version;
      $this->status = $status;
      $this->LabelData = $LabelData;
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
     * @return \DhlInternational\Lib\GetLabelResponse
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
     * @return \DhlInternational\Lib\GetLabelResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return LabelData
     */
    public function getLabelData()
    {
      return $this->LabelData;
    }

    /**
     * @param LabelData $LabelData
     * @return \DhlInternational\Lib\GetLabelResponse
     */
    public function setLabelData($LabelData)
    {
      $this->LabelData = $LabelData;
      return $this;
    }

}
