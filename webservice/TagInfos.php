<?php

class TagInfos
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @param int $Id
     * @param string $Name
     * @param string $Category
     * @param string $City
     * @param string $Country
     */
    public function __construct($Id, $Name, $Category, $City, $Country)
    {
      $this->Id = $Id;
      $this->Name = $Name;
      $this->Category = $Category;
      $this->City = $City;
      $this->Country = $Country;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return TagInfos
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return TagInfos
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return TagInfos
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return TagInfos
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return TagInfos
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
