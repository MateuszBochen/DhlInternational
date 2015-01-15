<?php

namespace DhlInternational\Lib;

class EndorsementServiceconfiguration
{

    /**
     * @var anonymous170 $active
     */
    protected $active = null;

    /**
     * @param anonymous170 $active
     */
    public function __construct($active)
    {
      $this->active = $active;
    }

    /**
     * @return anonymous170
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param anonymous170 $active
     * @return \DhlInternational\Lib\EndorsementServiceconfiguration
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

}
