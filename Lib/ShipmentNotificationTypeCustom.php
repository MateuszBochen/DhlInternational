<?php

namespace DhlInternational\Lib;

class ShipmentNotificationTypeCustom
{

    /**
     * @var string $RecipientName
     */
    protected $RecipientName = null;

    /**
     * @var string $RecipientEmailAddress
     */
    protected $RecipientEmailAddress = null;

    /**
     * @param string $RecipientName
     * @param string $RecipientEmailAddress
     */
    public function __construct($RecipientName = null, $RecipientEmailAddress = null)
    {
      $this->RecipientName = $RecipientName;
      $this->RecipientEmailAddress = $RecipientEmailAddress;
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
      return $this->RecipientName;
    }

    /**
     * @param string $RecipientName
     * @return \DhlInternational\Lib\ShipmentNotificationType
     */
    public function setRecipientName($RecipientName)
    {
      $this->RecipientName = $RecipientName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientEmailAddress()
    {
      return $this->RecipientEmailAddress;
    }

    /**
     * @param string $RecipientEmailAddress
     * @return \DhlInternational\Lib\ShipmentNotificationType
     */
    public function setRecipientEmailAddress($RecipientEmailAddress)
    {
      $this->RecipientEmailAddress = $RecipientEmailAddress;
      return $this;
    }

}
