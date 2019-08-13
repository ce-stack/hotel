<?php

class HotelRoomAvailabilityRequest
{

    /**
     * @var string $SessionId
     */
    protected $SessionId = null;

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var int $ResponseTime
     */
    protected $ResponseTime = null;

    /**
     * @param string $SessionId
     * @param int $ResultIndex
     * @param string $HotelCode
     * @param int $ResponseTime
     */
    public function __construct($SessionId, $ResultIndex, $HotelCode, $ResponseTime)
    {
      $this->SessionId = $SessionId;
      $this->ResultIndex = $ResultIndex;
      $this->HotelCode = $HotelCode;
      $this->ResponseTime = $ResponseTime;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param string $SessionId
     * @return HotelRoomAvailabilityRequest
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
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
     * @return HotelRoomAvailabilityRequest
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return HotelRoomAvailabilityRequest
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
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
     * @return HotelRoomAvailabilityRequest
     */
    public function setResponseTime($ResponseTime)
    {
      $this->ResponseTime = $ResponseTime;
      return $this;
    }

}
