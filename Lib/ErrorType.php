<?php

namespace DhlInternational\Lib;

class ErrorType
{

    /**
     * @var int $priority
     */
    protected $priority = null;

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var \DateTime $dateTime
     */
    protected $dateTime = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $descriptionLong
     */
    protected $descriptionLong = null;

    /**
     * @var string $solution
     */
    protected $solution = null;

    /**
     * @var string $application
     */
    protected $application = null;

    /**
     * @var string $module
     */
    protected $module = null;

    /**
     * @param int $priority
     * @param int $code
     * @param \DateTime $dateTime
     * @param string $description
     * @param string $descriptionLong
     * @param string $solution
     * @param string $application
     * @param string $module
     */
    public function __construct($priority, $code, \DateTime $dateTime, $description, $descriptionLong, $solution, $application, $module)
    {
      $this->priority = $priority;
      $this->code = $code;
      $this->dateTime = $dateTime->format(\DateTime::ATOM);
      $this->description = $description;
      $this->descriptionLong = $descriptionLong;
      $this->solution = $solution;
      $this->application = $application;
      $this->module = $module;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param int $priority
     * @return \DhlInternational\Lib\ErrorType
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \DhlInternational\Lib\ErrorType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
      if ($this->dateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateTime
     * @return \DhlInternational\Lib\ErrorType
     */
    public function setDateTime(\DateTime $dateTime)
    {
      $this->dateTime = $dateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \DhlInternational\Lib\ErrorType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionLong()
    {
      return $this->descriptionLong;
    }

    /**
     * @param string $descriptionLong
     * @return \DhlInternational\Lib\ErrorType
     */
    public function setDescriptionLong($descriptionLong)
    {
      $this->descriptionLong = $descriptionLong;
      return $this;
    }

    /**
     * @return string
     */
    public function getSolution()
    {
      return $this->solution;
    }

    /**
     * @param string $solution
     * @return \DhlInternational\Lib\ErrorType
     */
    public function setSolution($solution)
    {
      $this->solution = $solution;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
      return $this->application;
    }

    /**
     * @param string $application
     * @return \DhlInternational\Lib\ErrorType
     */
    public function setApplication($application)
    {
      $this->application = $application;
      return $this;
    }

    /**
     * @return string
     */
    public function getModule()
    {
      return $this->module;
    }

    /**
     * @param string $module
     * @return \DhlInternational\Lib\ErrorType
     */
    public function setModule($module)
    {
      $this->module = $module;
      return $this;
    }

}
