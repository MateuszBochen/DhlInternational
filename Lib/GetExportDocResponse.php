<?php

namespace DhlInternational\Lib;

class GetExportDocResponse
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
     * @var ExportDocData $ExportDocData
     */
    protected $ExportDocData = null;

    /**
     * @param Version $Version
     * @param Statusinformation $status
     * @param ExportDocData $ExportDocData
     */
    public function __construct($Version, $status, $ExportDocData)
    {
      $this->Version = $Version;
      $this->status = $status;
      $this->ExportDocData = $ExportDocData;
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
     * @return \DhlInternational\Lib\GetExportDocResponse
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
     * @return \DhlInternational\Lib\GetExportDocResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ExportDocData
     */
    public function getExportDocData()
    {
      return $this->ExportDocData;
    }

    /**
     * @param ExportDocData $ExportDocData
     * @return \DhlInternational\Lib\GetExportDocResponse
     */
    public function setExportDocData($ExportDocData)
    {
      $this->ExportDocData = $ExportDocData;
      return $this;
    }

}
