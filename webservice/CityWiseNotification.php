<?php

class CityWiseNotification
{

    /**
     * @var string $CityCode
     */
    protected $CityCode = null;

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $Caption
     */
    protected $Caption = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @param string $CityCode
     * @param string $CityName
     * @param string $CountryCode
     * @param string $CountryName
     * @param string $Caption
     * @param string $Text
     */
    public function __construct($CityCode, $CityName, $CountryCode, $CountryName, $Caption, $Text)
    {
      $this->CityCode = $CityCode;
      $this->CityName = $CityName;
      $this->CountryCode = $CountryCode;
      $this->CountryName = $CountryName;
      $this->Caption = $Caption;
      $this->Text = $Text;
    }

    /**
     * @return string
     */
    public function getCityCode()
    {
      return $this->CityCode;
    }

    /**
     * @param string $CityCode
     * @return CityWiseNotification
     */
    public function setCityCode($CityCode)
    {
      $this->CityCode = $CityCode;
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
     * @return CityWiseNotification
     */
    public function setCityName($CityName)
    {
      $this->CityName = $CityName;
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
     * @return CityWiseNotification
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
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
     * @return CityWiseNotification
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
      return $this->Caption;
    }

    /**
     * @param string $Caption
     * @return CityWiseNotification
     */
    public function setCaption($Caption)
    {
      $this->Caption = $Caption;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return CityWiseNotification
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
