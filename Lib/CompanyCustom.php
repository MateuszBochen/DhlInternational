<?php

namespace DhlInternational\Lib;

class CompanyCustom
{

    /**
     * @var name1 $name1
     */
    protected $name1 = null;

    /**
     * @var name2 $name2
     */
    protected $name2 = null;

    /**
     * @param name1 $name1
     * @param name2 $name2
     */
    public function __construct($name1 = null, $name2 = null)
    {
      $this->name1 = $name1;
      $this->name2 = $name2;
    }

    /**
     * @return name1
     */
    public function getName1()
    {
      return $this->name1;
    }

    /**
     * @param name1 $name1
     * @return \DhlInternational\Lib\Company
     */
    public function setName1($name1)
    {
      $this->name1 = $name1;
      return $this;
    }

    /**
     * @return name2
     */
    public function getName2()
    {
      return $this->name2;
    }

    /**
     * @param name2 $name2
     * @return \DhlInternational\Lib\Company
     */
    public function setName2($name2)
    {
      $this->name2 = $name2;
      return $this;
    }

}
