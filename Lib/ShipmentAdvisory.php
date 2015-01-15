<?php

namespace DhlInternational\Lib;

class ShipmentAdvisory
{

    /**
     * @var AdvisoryData $AdvisoryData
     */
    protected $AdvisoryData = null;

    /**
     * @param AdvisoryData $AdvisoryData
     */
    public function __construct($AdvisoryData)
    {
      $this->AdvisoryData = $AdvisoryData;
    }

    /**
     * @return AdvisoryData
     */
    public function getAdvisoryData()
    {
      return $this->AdvisoryData;
    }

    /**
     * @param AdvisoryData $AdvisoryData
     * @return \DhlInternational\Lib\ShipmentAdvisory
     */
    public function setAdvisoryData($AdvisoryData)
    {
      $this->AdvisoryData = $AdvisoryData;
      return $this;
    }

}
