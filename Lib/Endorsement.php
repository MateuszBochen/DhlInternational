<?php

namespace DhlInternational\Lib;

class Endorsement
{

    /**
     * @var EndorsementServiceconfiguration $UZN
     */
    protected $UZN = null;

    /**
     * @var EndorsementServiceconfiguration $KeNa
     */
    protected $KeNa = null;

    /**
     * @var EndorsementServiceconfiguration $NSI
     */
    protected $NSI = null;

    /**
     * @var EndorsementServiceconfigurationTeZu $TeZu
     */
    protected $TeZu = null;

    /**
     * @var EndorsementServiceconfiguration $SoZue
     */
    protected $SoZue = null;

    /**
     * @param EndorsementServiceconfiguration $UZN
     * @param EndorsementServiceconfiguration $KeNa
     * @param EndorsementServiceconfiguration $NSI
     * @param EndorsementServiceconfigurationTeZu $TeZu
     * @param EndorsementServiceconfiguration $SoZue
     */
    public function __construct($UZN, $KeNa, $NSI, $TeZu, $SoZue)
    {
      $this->UZN = $UZN;
      $this->KeNa = $KeNa;
      $this->NSI = $NSI;
      $this->TeZu = $TeZu;
      $this->SoZue = $SoZue;
    }

    /**
     * @return EndorsementServiceconfiguration
     */
    public function getUZN()
    {
      return $this->UZN;
    }

    /**
     * @param EndorsementServiceconfiguration $UZN
     * @return \DhlInternational\Lib\Endorsement
     */
    public function setUZN($UZN)
    {
      $this->UZN = $UZN;
      return $this;
    }

    /**
     * @return EndorsementServiceconfiguration
     */
    public function getKeNa()
    {
      return $this->KeNa;
    }

    /**
     * @param EndorsementServiceconfiguration $KeNa
     * @return \DhlInternational\Lib\Endorsement
     */
    public function setKeNa($KeNa)
    {
      $this->KeNa = $KeNa;
      return $this;
    }

    /**
     * @return EndorsementServiceconfiguration
     */
    public function getNSI()
    {
      return $this->NSI;
    }

    /**
     * @param EndorsementServiceconfiguration $NSI
     * @return \DhlInternational\Lib\Endorsement
     */
    public function setNSI($NSI)
    {
      $this->NSI = $NSI;
      return $this;
    }

    /**
     * @return EndorsementServiceconfigurationTeZu
     */
    public function getTeZu()
    {
      return $this->TeZu;
    }

    /**
     * @param EndorsementServiceconfigurationTeZu $TeZu
     * @return \DhlInternational\Lib\Endorsement
     */
    public function setTeZu($TeZu)
    {
      $this->TeZu = $TeZu;
      return $this;
    }

    /**
     * @return EndorsementServiceconfiguration
     */
    public function getSoZue()
    {
      return $this->SoZue;
    }

    /**
     * @param EndorsementServiceconfiguration $SoZue
     * @return \DhlInternational\Lib\Endorsement
     */
    public function setSoZue($SoZue)
    {
      $this->SoZue = $SoZue;
      return $this;
    }

}
