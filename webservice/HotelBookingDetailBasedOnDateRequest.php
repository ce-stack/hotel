<?php

class HotelBookingDetailBasedOnDateRequest
{

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     */
    public function __construct(\DateTime $FromDate, \DateTime $ToDate)
    {
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return HotelBookingDetailBasedOnDateRequest
     */
    public function setFromDate(\DateTime $FromDate)
    {
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return HotelBookingDetailBasedOnDateRequest
     */
    public function setToDate(\DateTime $ToDate)
    {
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      return $this;
    }

}
