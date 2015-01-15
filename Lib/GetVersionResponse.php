<?php

namespace DhlInternational\Lib;

class GetVersionResponse
{

    /**
     * @var Version $Version
     */
    protected $Version = null;

    /**
     * @param Version $Version
     */
    public function __construct($Version)
    {
      $this->Version = $Version;
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
     * @return \DhlInternational\Lib\GetVersionResponse
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
