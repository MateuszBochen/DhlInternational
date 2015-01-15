<?php

namespace DhlInternational\Lib;

class manifestDateRange
{

    /**
     * @var string $fromDate
     */
    protected $fromDate = null;

    /**
     * @var string $toDate
     */
    protected $toDate = null;

    /**
     * @param string $fromDate
     * @param string $toDate
     */
    public function __construct($fromDate, $toDate)
    {
      $this->fromDate = $fromDate;
      $this->toDate = $toDate;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
      return $this->fromDate;
    }

    /**
     * @param string $fromDate
     * @return \DhlInternational\Lib\manifestDateRange
     */
    public function setFromDate($fromDate)
    {
      $this->fromDate = $fromDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
      return $this->toDate;
    }

    /**
     * @param string $toDate
     * @return \DhlInternational\Lib\manifestDateRange
     */
    public function setToDate($toDate)
    {
      $this->toDate = $toDate;
      return $this;
    }

}
