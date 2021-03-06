<?php

namespace DhlInternational\Lib;

class AttendanceCustom
{

    /**
     * @var partnerID $partnerID
     */
    protected $partnerID = null;

    /**
     * @param partnerID $partnerID
     */
    public function __construct($partnerID = null)
    {
      $this->partnerID = $partnerID;
    }

    /**
     * @return partnerID
     */
    public function getPartnerID()
    {
      return $this->partnerID;
    }

    /**
     * @param partnerID $partnerID
     * @return \DhlInternational\Lib\Attendance
     */
    public function setPartnerID($partnerID)
    {
      $this->partnerID = $partnerID;
      return $this;
    }

}
