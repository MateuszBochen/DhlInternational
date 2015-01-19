<?php

namespace DhlInternational\Lib;

class ShipmentServiceTDCustom
{

    /**
     * @var TDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     */
    protected $ServiceGroupDateTimeOption = null;

    /**
     * @var TDServiceGroupOtherType $ServiceGroupOther
     */
    protected $ServiceGroupOther = null;

    /**
     * @param TDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     * @param TDServiceGroupOtherType $ServiceGroupOther
     */
    public function __construct($ServiceGroupDateTimeOption = null, $ServiceGroupOther = null)
    {
      $this->ServiceGroupDateTimeOption = $ServiceGroupDateTimeOption;
      $this->ServiceGroupOther = $ServiceGroupOther;
    }

    /**
     * @return TDServiceGroupDateTimeOptionType
     */
    public function getServiceGroupDateTimeOption()
    {
      return $this->ServiceGroupDateTimeOption;
    }

    /**
     * @param TDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     * @return \DhlInternational\Lib\ShipmentServiceTD
     */
    public function setServiceGroupDateTimeOption($ServiceGroupDateTimeOption)
    {
      $this->ServiceGroupDateTimeOption = $ServiceGroupDateTimeOption;
      return $this;
    }

    /**
     * @return TDServiceGroupOtherType
     */
    public function getServiceGroupOther()
    {
      return $this->ServiceGroupOther;
    }

    /**
     * @param TDServiceGroupOtherType $ServiceGroupOther
     * @return \DhlInternational\Lib\ShipmentServiceTD
     */
    public function setServiceGroupOther($ServiceGroupOther)
    {
      $this->ServiceGroupOther = $ServiceGroupOther;
      return $this;
    }

}
