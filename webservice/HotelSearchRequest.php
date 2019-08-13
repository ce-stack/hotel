<?php

class HotelSearchRequest
{

    /**
     * @var \DateTime $CheckInDate
     */
    protected $CheckInDate = null;

    /**
     * @var \DateTime $CheckOutDate
     */
    protected $CheckOutDate = null;

    /**
     * @var string $CountryName
     */
    protected $CountryName = null;

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @var int $CityId
     */
    protected $CityId = null;

    /**
     * @var boolean $IsNearBySearchAllowed
     */
    protected $IsNearBySearchAllowed = null;

    /**
     * @var int $NoOfRooms
     */
    protected $NoOfRooms = null;

    /**
     * @var string $GuestNationality
     */
    protected $GuestNationality = null;

    /**
     * @var ArrayOfRoomGuest $RoomGuests
     */
    protected $RoomGuests = null;

    /**
     * @var string $PreferredCurrencyCode
     */
    protected $PreferredCurrencyCode = null;

    /**
     * @var int $ResultCount
     */
    protected $ResultCount = null;

    /**
     * @var Filters $Filters
     */
    protected $Filters = null;

    /**
     * @var string $IsRoomInfoRequired
     */
    protected $IsRoomInfoRequired = null;

    /**
     * @var GeoCodes $GeoCodes
     */
    protected $GeoCodes = null;

    /**
     * @var int $ResponseTime
     */
    protected $ResponseTime = null;

    /**
     * @param \DateTime $CheckInDate
     * @param \DateTime $CheckOutDate
     * @param string $CountryName
     * @param string $CityName
     * @param int $CityId
     * @param boolean $IsNearBySearchAllowed
     * @param int $NoOfRooms
     * @param string $GuestNationality
     * @param ArrayOfRoomGuest $RoomGuests
     * @param string $PreferredCurrencyCode
     * @param int $ResultCount
     * @param Filters $Filters
     * @param string $IsRoomInfoRequired
     * @param GeoCodes $GeoCodes
     * @param int $ResponseTime
     */
    public function __construct(\DateTime $CheckInDate, \DateTime $CheckOutDate, $CountryName, $CityName, $CityId, $IsNearBySearchAllowed, $NoOfRooms, $GuestNationality, $RoomGuests, $PreferredCurrencyCode, $ResultCount, $Filters, $IsRoomInfoRequired, $ResponseTime)
    {
      $this->CheckInDate = $CheckInDate->format(\DateTime::ATOM);
      $this->CheckOutDate = $CheckOutDate->format(\DateTime::ATOM);
      $this->CountryName = $CountryName;
      $this->CityName = $CityName;
      $this->CityId = $CityId;
      $this->IsNearBySearchAllowed = $IsNearBySearchAllowed;
      $this->NoOfRooms = $NoOfRooms;
      $this->GuestNationality = $GuestNationality;
      $this->RoomGuests = $RoomGuests;
      $this->PreferredCurrencyCode = $PreferredCurrencyCode;
      $this->ResultCount = $ResultCount;
      $this->Filters = $Filters;
      $this->IsRoomInfoRequired = $IsRoomInfoRequired;
      //$this->GeoCodes = $GeoCodes;
      $this->ResponseTime = $ResponseTime;
    }

    /**
     * @return \DateTime
     */
    public function getCheckInDate()
    {
      if ($this->CheckInDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckInDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckInDate
     * @return HotelSearchRequest
     */
    public function setCheckInDate(\DateTime $CheckInDate)
    {
      $this->CheckInDate = $CheckInDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckOutDate()
    {
      if ($this->CheckOutDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckOutDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckOutDate
     * @return HotelSearchRequest
     */
    public function setCheckOutDate(\DateTime $CheckOutDate)
    {
      $this->CheckOutDate = $CheckOutDate->format(\DateTime::ATOM);
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
     * @return HotelSearchRequest
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
     * @return HotelSearchRequest
     */
    public function setCityName($CityName)
    {
      $this->CityName = $CityName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
      return $this->CityId;
    }

    /**
     * @param int $CityId
     * @return HotelSearchRequest
     */
    public function setCityId($CityId)
    {
      $this->CityId = $CityId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNearBySearchAllowed()
    {
      return $this->IsNearBySearchAllowed;
    }

    /**
     * @param boolean $IsNearBySearchAllowed
     * @return HotelSearchRequest
     */
    public function setIsNearBySearchAllowed($IsNearBySearchAllowed)
    {
      $this->IsNearBySearchAllowed = $IsNearBySearchAllowed;
      return $this;
    }

    /**
     * @return int
     */
    public function getNoOfRooms()
    {
      return $this->NoOfRooms;
    }

    /**
     * @param int $NoOfRooms
     * @return HotelSearchRequest
     */
    public function setNoOfRooms($NoOfRooms)
    {
      $this->NoOfRooms = $NoOfRooms;
      return $this;
    }

    /**
     * @return string
     */
    public function getGuestNationality()
    {
      return $this->GuestNationality;
    }

    /**
     * @param string $GuestNationality
     * @return HotelSearchRequest
     */
    public function setGuestNationality($GuestNationality)
    {
      $this->GuestNationality = $GuestNationality;
      return $this;
    }

    /**
     * @return ArrayOfRoomGuest
     */
    public function getRoomGuests()
    {
      return $this->RoomGuests;
    }

    /**
     * @param ArrayOfRoomGuest $RoomGuests
     * @return HotelSearchRequest
     */
    public function setRoomGuests($RoomGuests)
    {
      $this->RoomGuests = $RoomGuests;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredCurrencyCode()
    {
      return $this->PreferredCurrencyCode;
    }

    /**
     * @param string $PreferredCurrencyCode
     * @return HotelSearchRequest
     */
    public function setPreferredCurrencyCode($PreferredCurrencyCode)
    {
      $this->PreferredCurrencyCode = $PreferredCurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultCount()
    {
      return $this->ResultCount;
    }

    /**
     * @param int $ResultCount
     * @return HotelSearchRequest
     */
    public function setResultCount($ResultCount)
    {
      $this->ResultCount = $ResultCount;
      return $this;
    }

    /**
     * @return Filters
     */
    public function getFilters()
    {
      return $this->Filters;
    }

    /**
     * @param Filters $Filters
     * @return HotelSearchRequest
     */
    public function setFilters($Filters)
    {
      $this->Filters = $Filters;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsRoomInfoRequired()
    {
      return $this->IsRoomInfoRequired;
    }

    /**
     * @param string $IsRoomInfoRequired
     * @return HotelSearchRequest
     */
    public function setIsRoomInfoRequired($IsRoomInfoRequired)
    {
      $this->IsRoomInfoRequired = $IsRoomInfoRequired;
      return $this;
    }

    /**
     * @return GeoCodes
     */
    public function getGeoCodes()
    {
      return $this->GeoCodes;
    }

    /**
     * @param GeoCodes $GeoCodes
     * @return HotelSearchRequest
     */
    public function setGeoCodes($GeoCodes)
    {
      $this->GeoCodes = $GeoCodes;
      return $this;
    }

    /**
     * @return int
     */
    public function getResponseTime()
    {
      return $this->ResponseTime;
    }

    /**
     * @param int $ResponseTime
     * @return HotelSearchRequest
     */
    public function setResponseTime($ResponseTime)
    {
      $this->ResponseTime = $ResponseTime;
      return $this;
    }

}
