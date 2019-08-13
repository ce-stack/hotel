<?php

class BookingsBasedOnDate
{

    /**
     * @var int $Index
     */
    protected $Index = null;

    /**
     * @var string $BookingId
     */
    protected $BookingId = null;

    /**
     * @var string $ConfirmationNo
     */
    protected $ConfirmationNo = null;

    /**
     * @var string $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $AgentMarkup
     */
    protected $AgentMarkup = null;

    /**
     * @var string $AgencyName
     */
    protected $AgencyName = null;

    /**
     * @var APIHotelBookingStatus $BookingStatus
     */
    protected $BookingStatus = null;

    /**
     * @var string $BookingPrice
     */
    protected $BookingPrice = null;

    /**
     * @var string $Remarks
     */
    protected $Remarks = null;

    /**
     * @param int $Index
     * @param APIHotelBookingStatus $BookingStatus
     */
    public function __construct($Index, $BookingStatus)
    {
      $this->Index = $Index;
      $this->BookingStatus = $BookingStatus;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
      return $this->Index;
    }

    /**
     * @param int $Index
     * @return BookingsBasedOnDate
     */
    public function setIndex($Index)
    {
      $this->Index = $Index;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingId()
    {
      return $this->BookingId;
    }

    /**
     * @param string $BookingId
     * @return BookingsBasedOnDate
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationNo()
    {
      return $this->ConfirmationNo;
    }

    /**
     * @param string $ConfirmationNo
     * @return BookingsBasedOnDate
     */
    public function setConfirmationNo($ConfirmationNo)
    {
      $this->ConfirmationNo = $ConfirmationNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingDate()
    {
      return $this->BookingDate;
    }

    /**
     * @param string $BookingDate
     * @return BookingsBasedOnDate
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return BookingsBasedOnDate
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgentMarkup()
    {
      return $this->AgentMarkup;
    }

    /**
     * @param string $AgentMarkup
     * @return BookingsBasedOnDate
     */
    public function setAgentMarkup($AgentMarkup)
    {
      $this->AgentMarkup = $AgentMarkup;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyName()
    {
      return $this->AgencyName;
    }

    /**
     * @param string $AgencyName
     * @return BookingsBasedOnDate
     */
    public function setAgencyName($AgencyName)
    {
      $this->AgencyName = $AgencyName;
      return $this;
    }

    /**
     * @return APIHotelBookingStatus
     */
    public function getBookingStatus()
    {
      return $this->BookingStatus;
    }

    /**
     * @param APIHotelBookingStatus $BookingStatus
     * @return BookingsBasedOnDate
     */
    public function setBookingStatus($BookingStatus)
    {
      $this->BookingStatus = $BookingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingPrice()
    {
      return $this->BookingPrice;
    }

    /**
     * @param string $BookingPrice
     * @return BookingsBasedOnDate
     */
    public function setBookingPrice($BookingPrice)
    {
      $this->BookingPrice = $BookingPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param string $Remarks
     * @return BookingsBasedOnDate
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

}
