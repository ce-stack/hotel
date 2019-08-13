<?php

class TagInfoResponse
{

    /**
     * @var ResponseStatus $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfTagInfos $TagInfos
     */
    protected $TagInfos = null;

    /**
     * @param ResponseStatus $Status
     * @param ArrayOfTagInfos $TagInfos
     */
    public function __construct($Status, $TagInfos)
    {
      $this->Status = $Status;
      $this->TagInfos = $TagInfos;
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
     * @return TagInfoResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfTagInfos
     */
    public function getTagInfos()
    {
      return $this->TagInfos;
    }

    /**
     * @param ArrayOfTagInfos $TagInfos
     * @return TagInfoResponse
     */
    public function setTagInfos($TagInfos)
    {
      $this->TagInfos = $TagInfos;
      return $this;
    }

}
