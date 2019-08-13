<?php

class GiataHotelCodesRequest
{

    /**
     * @var string $CityCode
     */
    protected $CityCode = null;

    /**
     * @var string $IsDetailedResponse
     */
    protected $IsDetailedResponse = null;

    /**
     * @param string $CityCode
     * @param string $IsDetailedResponse
     */
    public function __construct($CityCode, $IsDetailedResponse)
    {
      $this->CityCode = $CityCode;
      $this->IsDetailedResponse = $IsDetailedResponse;
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
     * @return GiataHotelCodesRequest
     */
    public function setCityCode($CityCode)
    {
      $this->CityCode = $CityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsDetailedResponse()
    {
      return $this->IsDetailedResponse;
    }

    /**
     * @param string $IsDetailedResponse
     * @return GiataHotelCodesRequest
     */
    public function setIsDetailedResponse($IsDetailedResponse)
    {
      $this->IsDetailedResponse = $IsDetailedResponse;
      return $this;
    }

}
