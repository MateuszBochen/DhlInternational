<?php

namespace DhlInternational\Lib;

class StatusinformationCustom
{

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @param int $StatusCode
     * @param string $StatusMessage
     */
    public function __construct($StatusCode = null, $StatusMessage = null)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusMessage = $StatusMessage;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return \DhlInternational\Lib\Statusinformation
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \DhlInternational\Lib\Statusinformation
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

}
