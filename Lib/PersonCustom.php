<?php

namespace DhlInternational\Lib;

class PersonCustom
{

    /**
     * @var salutation $salutation
     */
    protected $salutation = null;

    /**
     * @var title $title
     */
    protected $title = null;

    /**
     * @var firstname $firstname
     */
    protected $firstname = null;

    /**
     * @var middlename $middlename
     */
    protected $middlename = null;

    /**
     * @var lastname $lastname
     */
    protected $lastname = null;

    /**
     * @param salutation $salutation
     * @param title $title
     * @param firstname $firstname
     * @param middlename $middlename
     * @param lastname $lastname
     */
    public function __construct($salutation = null, $title = null, $firstname = null, $middlename = null, $lastname = null)
    {
      $this->salutation = $salutation;
      $this->title = $title;
      $this->firstname = $firstname;
      $this->middlename = $middlename;
      $this->lastname = $lastname;
    }

    /**
     * @return salutation
     */
    public function getSalutation()
    {
      return $this->salutation;
    }

    /**
     * @param salutation $salutation
     * @return \DhlInternational\Lib\Person
     */
    public function setSalutation($salutation)
    {
      $this->salutation = $salutation;
      return $this;
    }

    /**
     * @return title
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param title $title
     * @return \DhlInternational\Lib\Person
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return firstname
     */
    public function getFirstname()
    {
      return $this->firstname;
    }

    /**
     * @param firstname $firstname
     * @return \DhlInternational\Lib\Person
     */
    public function setFirstname($firstname)
    {
      $this->firstname = $firstname;
      return $this;
    }

    /**
     * @return middlename
     */
    public function getMiddlename()
    {
      return $this->middlename;
    }

    /**
     * @param middlename $middlename
     * @return \DhlInternational\Lib\Person
     */
    public function setMiddlename($middlename)
    {
      $this->middlename = $middlename;
      return $this;
    }

    /**
     * @return lastname
     */
    public function getLastname()
    {
      return $this->lastname;
    }

    /**
     * @param lastname $lastname
     * @return \DhlInternational\Lib\Person
     */
    public function setLastname($lastname)
    {
      $this->lastname = $lastname;
      return $this;
    }

}
