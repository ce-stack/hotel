<?php

class PriceChangeStatus
{

    /**
     * @var ArrayOfHotel_Room $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var boolean $Status
     */
    protected $Status = null;

    /**
     * @var boolean $AvailableOnNewPrice
     */
    protected $AvailableOnNewPrice = null;

    /**
     * @var string $NewPrice
     */
    protected $NewPrice = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @param boolean $Status
     * @param boolean $AvailableOnNewPrice
     * @param string $NewPrice
     * @param string $Currency
     */
    public function __construct($Status, $AvailableOnNewPrice, $NewPrice, $Currency)
    {
      $this->Status = $Status;
      $this->AvailableOnNewPrice = $AvailableOnNewPrice;
      $this->NewPrice = $NewPrice;
      $this->Currency = $Currency;
    }

    /**
     * @return ArrayOfHotel_Room
     */
    public function getHotelRooms()
    {
      return $this->HotelRooms;
    }

    /**
     * @param ArrayOfHotel_Room $HotelRooms
     * @return PriceChangeStatus
     */
    public function setHotelRooms($HotelRooms)
    {
      $this->HotelRooms = $HotelRooms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param boolean $Status
     * @return PriceChangeStatus
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableOnNewPrice()
    {
      return $this->AvailableOnNewPrice;
    }

    /**
     * @param boolean $AvailableOnNewPrice
     * @return PriceChangeStatus
     */
    public function setAvailableOnNewPrice($AvailableOnNewPrice)
    {
      $this->AvailableOnNewPrice = $AvailableOnNewPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPrice()
    {
      return $this->NewPrice;
    }

    /**
     * @param string $NewPrice
     * @return PriceChangeStatus
     */
    public function setNewPrice($NewPrice)
    {
      $this->NewPrice = $NewPrice;
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
     * @return PriceChangeStatus
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}
