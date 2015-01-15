<?php

namespace DhlInternational\Lib;

class GetManifestDDResponse
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
     * @var string $ManifestPDFData
     */
    protected $ManifestPDFData = null;

    /**
     * @param Version $Version
     * @param Statusinformation $status
     * @param string $ManifestPDFData
     */
    public function __construct($Version, $status, $ManifestPDFData)
    {
      $this->Version = $Version;
      $this->status = $status;
      $this->ManifestPDFData = $ManifestPDFData;
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
     * @return \DhlInternational\Lib\GetManifestDDResponse
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
     * @return \DhlInternational\Lib\GetManifestDDResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getManifestPDFData()
    {
      return $this->ManifestPDFData;
    }

    /**
     * @param string $ManifestPDFData
     * @return \DhlInternational\Lib\GetManifestDDResponse
     */
    public function setManifestPDFData($ManifestPDFData)
    {
      $this->ManifestPDFData = $ManifestPDFData;
      return $this;
    }

}
