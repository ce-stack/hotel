<?php

class GiataHotelCodesResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfGiataHotels $Hotels
     */
    protected $Hotels = null;

    /**
     * @var ArrayOfAPIHotelDetails $HotelDetails
     */
    protected $HotelDetails = null;

    /**
     * @param ResponseStatus $Status
     * @param ArrayOfGiataHotels $Hotels
     * @param ArrayOfAPIHotelDetails $HotelDetails
     */
    public function __construct($Status, $Hotels, $HotelDetails)
    {
      $this->Status = $Status;
      $this->Hotels = $Hotels;
      $this->HotelDetails = $HotelDetails;
    }

    /**
     * @return ResponseStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ResponseStatus $Status
     * @return GiataHotelCodesResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfGiataHotels
     */
    public function getHotels()
    {
      return $this->Hotels;
    }

    /**
     * @param ArrayOfGiataHotels $Hotels
     * @return GiataHotelCodesResponse
     */
    public function setHotels($Hotels)
    {
      $this->Hotels = $Hotels;
      return $this;
    }

    /**
     * @return ArrayOfAPIHotelDetails
     */
    public function getHotelDetails()
    {
      return $this->HotelDetails;
    }

    /**
     * @param ArrayOfAPIHotelDetails $HotelDetails
     * @return GiataHotelCodesResponse
     */
    public function setHotelDetails($HotelDetails)
    {
      $this->HotelDetails = $HotelDetails;
      return $this;
    }

}
