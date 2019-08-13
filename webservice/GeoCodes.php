<?php

class GeoCodes
{

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @var int $SearchRadius
     */
    protected $SearchRadius = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param int $SearchRadius
     */
    public function __construct($SearchRadius)
    {
      $this->SearchRadius = $SearchRadius;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return GeoCodes
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return GeoCodes
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchRadius()
    {
      return $this->SearchRadius;
    }

    /**
     * @param int $SearchRadius
     * @return GeoCodes
     */
    public function setSearchRadius($SearchRadius)
    {
      $this->SearchRadius = $SearchRadius;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return GeoCodes
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
