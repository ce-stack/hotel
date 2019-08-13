<?php

class HotelBookingDetailBasedOnDateResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfBookingsBasedOnDate $BookingDetail
     */
    protected $BookingDetail = null;

    /**
     * @param ResponseStatus $Status
     * @param ArrayOfBookingsBasedOnDate $BookingDetail
     */
    public function __construct($Status, $BookingDetail)
    {
      $this->Status = $Status;
      $this->BookingDetail = $BookingDetail;
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
     * @return HotelBookingDetailBasedOnDateResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfBookingsBasedOnDate
     */
    public function getBookingDetail()
    {
      return $this->BookingDetail;
    }

    /**
     * @param ArrayOfBookingsBasedOnDate $BookingDetail
     * @return HotelBookingDetailBasedOnDateResponse
     */
    public function setBookingDetail($BookingDetail)
    {
      $this->BookingDetail = $BookingDetail;
      return $this;
    }

}
