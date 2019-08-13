<?php

class HotelDetailsRequest
{

    /**
     * @var int $ResultIndex
     */
    protected $ResultIndex = null;

    /**
     * @var string $SessionId
     */
    protected $SessionId = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @param int $ResultIndex
     * @param string $SessionId
     * @param string $HotelCode
     * @param string $Language
     */
    public function __construct($ResultIndex, $SessionId, $HotelCode, $Language)
    {
      $this->ResultIndex = $ResultIndex;
      $this->SessionId = $SessionId;
      $this->HotelCode = $HotelCode;
      $this->Language = $Language;
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
     * @return HotelDetailsRequest
     */
    public function setResultIndex($ResultIndex)
    {
      $this->ResultIndex = $ResultIndex;
      return $this;
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
     * @return HotelDetailsRequest
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
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
     * @return HotelDetailsRequest
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return HotelDetailsRequest
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
