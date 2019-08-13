<?php

class DestinationCityListRequest
{

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $ReturnNewCityCodes
     */
    protected $ReturnNewCityCodes = null;

    /**
     * @param string $CountryCode
     * @param string $ReturnNewCityCodes
     */
    public function __construct($CountryCode, $ReturnNewCityCodes)
    {
      $this->CountryCode = $CountryCode;
      $this->ReturnNewCityCodes = $ReturnNewCityCodes;
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
     * @return DestinationCityListRequest
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnNewCityCodes()
    {
      return $this->ReturnNewCityCodes;
    }

    /**
     * @param string $ReturnNewCityCodes
     * @return DestinationCityListRequest
     */
    public function setReturnNewCityCodes($ReturnNewCityCodes)
    {
      $this->ReturnNewCityCodes = $ReturnNewCityCodes;
      return $this;
    }

}
