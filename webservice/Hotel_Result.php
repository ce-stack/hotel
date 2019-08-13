<?php

class Hotel_Result
{

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var HotelInfo $HotelInfo
     */
    protected $HotelInfo = null;

    /**
     * @var MinHotelPrice $MinHotelPrice
     */
    protected $MinHotelPrice = null;

    /**
     * @var boolean $IsPkgProperty
     */
    protected $IsPkgProperty = null;

    /**
     * @var ArrayOfRooms $RoomDetails
     */
    protected $RoomDetails = null;

    /**
     * @var boolean $IsPackageRate
     */
    protected $IsPackageRate = null;

    /**
     * @var boolean $MappedHotel
     */
    protected $MappedHotel = null;

    /**
     * @param int $ResultIndex
     * @param boolean $IsPkgProperty
     * @param boolean $IsPackageRate
     * @param boolean $MappedHotel
     */
    public function __construct($ResultIndex, $IsPkgProperty, $IsPackageRate, $MappedHotel)
    {
      $this->ResultIndex = $ResultIndex;
      $this->IsPkgProperty = $IsPkgProperty;
      $this->IsPackageRate = $IsPackageRate;
      $this->MappedHotel = $MappedHotel;
    }

    /**
     * @return int
     */
    public function getResultIndex()
    {
      return $this->ResultIndex;
    }

    /**
     * @param int $ResultIndex
     * @return Hotel_Result
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
    }

    /**
     * @return HotelInfo
     */
    public function getHotelInfo()
    {
      return $this->HotelInfo;
    }

    /**
     * @param HotelInfo $HotelInfo
     * @return Hotel_Result
     */
    public function setHotelInfo($HotelInfo)
    {
      $this->HotelInfo = $HotelInfo;
      return $this;
    }

    /**
     * @return MinHotelPrice
     */
    public function getMinHotelPrice()
    {
      return $this->MinHotelPrice;
    }

    /**
     * @param MinHotelPrice $MinHotelPrice
     * @return Hotel_Result
     */
    public function setMinHotelPrice($MinHotelPrice)
    {
      $this->MinHotelPrice = $MinHotelPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPkgProperty()
    {
      return $this->IsPkgProperty;
    }

    /**
     * @param boolean $IsPkgProperty
     * @return Hotel_Result
     */
    public function setIsPkgProperty($IsPkgProperty)
    {
      $this->IsPkgProperty = $IsPkgProperty;
      return $this;
    }

    /**
     * @return ArrayOfRooms
     */
    public function getRoomDetails()
    {
      return $this->RoomDetails;
    }

    /**
     * @param ArrayOfRooms $RoomDetails
     * @return Hotel_Result
     */
    public function setRoomDetails($RoomDetails)
    {
      $this->RoomDetails = $RoomDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPackageRate()
    {
      return $this->IsPackageRate;
    }

    /**
     * @param boolean $IsPackageRate
     * @return Hotel_Result
     */
    public function setIsPackageRate($IsPackageRate)
    {
      $this->IsPackageRate = $IsPackageRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMappedHotel()
    {
      return $this->MappedHotel;
    }

    /**
     * @param boolean $MappedHotel
     * @return Hotel_Result
     */
    public function setMappedHotel($MappedHotel)
    {
      $this->MappedHotel = $MappedHotel;
      return $this;
    }

}
