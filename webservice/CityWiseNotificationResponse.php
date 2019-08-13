<?php

class CityWiseNotificationResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfCityWiseNotification $CityWiseNotifications
     */
    protected $CityWiseNotifications = null;

    /**
     * @param ResponseStatus $Status
     * @param ArrayOfCityWiseNotification $CityWiseNotifications
     */
    public function __construct($Status, $CityWiseNotifications)
    {
      $this->Status = $Status;
      $this->CityWiseNotifications = $CityWiseNotifications;
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
     * @return CityWiseNotificationResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfCityWiseNotification
     */
    public function getCityWiseNotifications()
    {
      return $this->CityWiseNotifications;
    }

    /**
     * @param ArrayOfCityWiseNotification $CityWiseNotifications
     * @return CityWiseNotificationResponse
     */
    public function setCityWiseNotifications($CityWiseNotifications)
    {
      $this->CityWiseNotifications = $CityWiseNotifications;
      return $this;
    }

}
