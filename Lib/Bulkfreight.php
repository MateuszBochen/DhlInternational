<?php

namespace DhlInternational\Lib;

class Bulkfreight
{

    /**
     * @var BulkfreightType $BulkfreightType
     */
    protected $BulkfreightType = null;

    /**
     * @param BulkfreightType $BulkfreightType
     */
    public function __construct($BulkfreightType)
    {
      $this->BulkfreightType = $BulkfreightType;
    }

    /**
     * @return BulkfreightType
     */
    public function getBulkfreightType()
    {
      return $this->BulkfreightType;
    }

    /**
     * @param BulkfreightType $BulkfreightType
     * @return \DhlInternational\Lib\Bulkfreight
     */
    public function setBulkfreightType($BulkfreightType)
    {
      $this->BulkfreightType = $BulkfreightType;
      return $this;
    }

}
