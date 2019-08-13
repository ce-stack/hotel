<?php

class Filters
{

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var HotelRatingInput $StarRating
     */
    protected $StarRating = null;

    /**
     * @var OrderByFilter $OrderBy
     */
    protected $OrderBy = null;

    /**
     * @var string $HotelCodeList
     */
    protected $HotelCodeList = null;

    /**
     * @param HotelRatingInput $StarRating
     * @param OrderByFilter $OrderBy
     */
    public function __construct($StarRating, $OrderBy)
    {
      $this->StarRating = $StarRating;
      $this->OrderBy = $OrderBy;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return Filters
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return HotelRatingInput
     */
    public function getStarRating()
    {
      return $this->StarRating;
    }

    /**
     * @param HotelRatingInput $StarRating
     * @return Filters
     */
    public function setStarRating($StarRating)
    {
      $this->StarRating = $StarRating;
      return $this;
    }

    /**
     * @return OrderByFilter
     */
    public function getOrderBy()
    {
      return $this->OrderBy;
    }

    /**
     * @param OrderByFilter $OrderBy
     * @return Filters
     */
    public function setOrderBy($OrderBy)
    {
      $this->OrderBy = $OrderBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCodeList()
    {
      return $this->HotelCodeList;
    }

    /**
     * @param string $HotelCodeList
     * @return Filters
     */
    public function setHotelCodeList($HotelCodeList)
    {
      $this->HotelCodeList = $HotelCodeList;
      return $this;
    }

}
