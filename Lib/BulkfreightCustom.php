<?php

namespace DhlInternational\Lib;

class BulkfreightCustom
{

    /**
     * @var BulkfreightType $BulkfreightType
     */
    protected $BulkfreightType = null;

    /**
     * @param BulkfreightType $BulkfreightType
     */
    public function __construct($BulkfreightType = null)
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
