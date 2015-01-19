<?php

namespace DhlInternational\Lib;

class IdentExtraCustom
{

    /**
     * @var IdentityData $Group1
     */
    protected $Group1 = null;

    /**
     * @var IdentityData $Group2
     */
    protected $Group2 = null;

    /**
     * @param IdentityData $Group1
     * @param IdentityData $Group2
     */
    public function __construct($Group1 = null, $Group2 = null)
    {
      $this->Group1 = $Group1;
      $this->Group2 = $Group2;
    }

    /**
     * @return IdentityData
     */
    public function getGroup1()
    {
      return $this->Group1;
    }

    /**
     * @param IdentityData $Group1
     * @return \DhlInternational\Lib\IdentExtra
     */
    public function setGroup1($Group1)
    {
      $this->Group1 = $Group1;
      return $this;
    }

    /**
     * @return IdentityData
     */
    public function getGroup2()
    {
      return $this->Group2;
    }

    /**
     * @param IdentityData $Group2
     * @return \DhlInternational\Lib\IdentExtra
     */
    public function setGroup2($Group2)
    {
      $this->Group2 = $Group2;
      return $this;
    }

}
