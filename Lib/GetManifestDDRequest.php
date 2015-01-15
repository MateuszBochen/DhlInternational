<?php

namespace DhlInternational\Lib;

class GetManifestDDRequest
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @var string $manifestDate
     */
    protected $manifestDate = null;

    /**
     * @var manifestDateRange $manifestDateRange
     */
    protected $manifestDateRange = null;

    /**
     * @param Version $Version
     * @param string $manifestDate
     * @param manifestDateRange $manifestDateRange
     */
    public function __construct($Version, $manifestDate, $manifestDateRange)
    {
      $this->Version = $Version;
      $this->manifestDate = $manifestDate;
      $this->manifestDateRange = $manifestDateRange;
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
     * @return \DhlInternational\Lib\GetManifestDDRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getManifestDate()
    {
      return $this->manifestDate;
    }

    /**
     * @param string $manifestDate
     * @return \DhlInternational\Lib\GetManifestDDRequest
     */
    public function setManifestDate($manifestDate)
    {
      $this->manifestDate = $manifestDate;
      return $this;
    }

    /**
     * @return manifestDateRange
     */
    public function getManifestDateRange()
    {
      return $this->manifestDateRange;
    }

    /**
     * @param manifestDateRange $manifestDateRange
     * @return \DhlInternational\Lib\GetManifestDDRequest
     */
    public function setManifestDateRange($manifestDateRange)
    {
      $this->manifestDateRange = $manifestDateRange;
      return $this;
    }

}
