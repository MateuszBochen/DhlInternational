<?php

namespace DhlInternational\Lib;

class NameTypeCustom
{

    /**
     * @var Person $Person
     */
    protected $Person = null;

    /**
     * @var Company $Company
     */
    protected $Company = null;

    /**
     * @param Person $Person
     * @param Company $Company
     */
    public function __construct($Person = null, $Company = null)
    {
      $this->Person = $Person;
      $this->Company = $Company;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
      return $this->Person;
    }

    /**
     * @param Person $Person
     * @return \DhlInternational\Lib\NameType
     */
    public function setPerson($Person)
    {
      $this->Person = $Person;
      return $this;
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param Company $Company
     * @return \DhlInternational\Lib\NameType
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

}
