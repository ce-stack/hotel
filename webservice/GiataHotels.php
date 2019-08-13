<?php

class GiataHotels
{

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var string $HotelAddress
     */
    protected $HotelAddress = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @var HotelRating $StarRating
     */
    protected $StarRating = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @param string $HotelCode
     * @param string $HotelName
     * @param string $HotelAddress
     * @param string $Latitude
     * @param string $Longitude
     * @param HotelRating $StarRating
     * @param string $CountryName
     * @param string $CityName
     */
    public function __construct($HotelCode, $HotelName, $HotelAddress, $Latitude, $Longitude, $StarRating, $CountryName, $CityName)
    {
      $this->HotelCode = $HotelCode;
      $this->HotelName = $HotelName;
      $this->HotelAddress = $HotelAddress;
      $this->Latitude = $Latitude;
      $this->Longitude = $Longitude;
      $this->StarRating = $StarRating;
      $this->CountryName = $CountryName;
      $this->CityName = $CityName;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return GiataHotels
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return GiataHotels
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelAddress()
    {
      return $this->HotelAddress;
    }

    /**
     * @param string $HotelAddress
     * @return GiataHotels
     */
    public function setHotelAddress($HotelAddress)
    {
      $this->HotelAddress = $HotelAddress;
      return $this;
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
     * @return GiataHotels
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
     * @return GiataHotels
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return HotelRating
     */
    public function getStarRating()
    {
      return $this->StarRating;
    }

    /**
     * @param HotelRating $StarRating
     * @return GiataHotels
     */
    public function setStarRating($StarRating)
    {
      $this->StarRating = $StarRating;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return GiataHotels
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
      return $this->CityName;
    }

    /**
     * @param string $CityName
     * @return GiataHotels
     */
    public function setCityName($CityName)
    {
      $this->CityName = $CityName;
      return $this;
    }

}
