<?php

namespace DhlInternational\Lib;

class EndorsementServiceconfigurationTeZuCustom
{

    /**
     * @var anonymous172 $active
     */
    protected $active = null;

    /**
     * @var anonymous173 $tezuDate
     */
    protected $tezuDate = null;

    /**
     * @param anonymous172 $active
     * @param anonymous173 $tezuDate
     */
    public function __construct($active = null, $tezuDate = null)
    {
      $this->active = $active;
      $this->tezuDate = $tezuDate;
    }

    /**
     * @return anonymous172
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param anonymous172 $active
     * @return \DhlInternational\Lib\EndorsementServiceconfigurationTeZu
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

    /**
     * @return anonymous173
     */
    public function getTezuDate()
    {
      return $this->tezuDate;
    }

    /**
     * @param anonymous173 $tezuDate
     * @return \DhlInternational\Lib\EndorsementServiceconfigurationTeZu
     */
    public function setTezuDate($tezuDate)
    {
      $this->tezuDate = $tezuDate;
      return $this;
    }

}
