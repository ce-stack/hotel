<?php

class Rooms
{

    /**
     * @var string $RoomType
     */
    protected $RoomType = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var string $Inclusion
     */
    protected $Inclusion = null;

    /**
     * @param string $RoomType
     * @param string $RatePlanCode
     * @param string $Inclusion
     */
    public function __construct($RoomType, $RatePlanCode, $Inclusion)
    {
      $this->RoomType = $RoomType;
      $this->RatePlanCode = $RatePlanCode;
      $this->Inclusion = $Inclusion;
    }

    /**
     * @return string
     */
    public function getRoomType()
    {
      return $this->RoomType;
    }

    /**
     * @param string $RoomType
     * @return Rooms
     */
    public function setRoomType($RoomType)
    {
      $this->RoomType = $RoomType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return Rooms
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInclusion()
    {
      return $this->Inclusion;
    }

    /**
     * @param string $Inclusion
     * @return Rooms
     */
    public function setInclusion($Inclusion)
    {
      $this->Inclusion = $Inclusion;
      return $this;
    }

}
