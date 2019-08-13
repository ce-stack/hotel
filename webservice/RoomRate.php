<?php

class RoomRate
{

    /**
     * @var ArrayOfDayRate $DayRates
     */
    protected $DayRates = null;

    /**
     * @var float $ExtraGuestCharges
     */
    protected $ExtraGuestCharges = null;

    /**
     * @var float $ChildCharges
     */
    protected $ChildCharges = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var float $OtherCharges
     */
    protected $OtherCharges = null;

    /**
     * @var float $ServiceTax
     */
    protected $ServiceTax = null;

    /**
     * @var boolean $IsPackageRate
     */
    protected $IsPackageRate = null;

    /**
     * @var boolean $B2CRates
     */
    protected $B2CRates = null;

    /**
     * @var float $AgentMarkUp
     */
    protected $AgentMarkUp = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $RoomFare
     */
    protected $RoomFare = null;

    /**
     * @var float $RoomTax
     */
    protected $RoomTax = null;

    /**
     * @var string $PrefPrice
     */
    protected $PrefPrice = null;

    /**
     * @var string $HeadGSAMarkUp
     */
    protected $HeadGSAMarkUp = null;

    /**
     * @var float $TotalFare
     */
    protected $TotalFare = null;

    /**
     * @var string $PrefCurrency
     */
    protected $PrefCurrency = null;

    /**
     * @param float $ExtraGuestCharges
     * @param float $ChildCharges
     * @param float $Discount
     * @param float $OtherCharges
     * @param float $ServiceTax
     * @param boolean $IsPackageRate
     * @param boolean $B2CRates
     * @param float $AgentMarkUp
     * @param string $Currency
     * @param float $RoomFare
     * @param float $RoomTax
     * @param string $PrefPrice
     * @param string $HeadGSAMarkUp
     * @param float $TotalFare
     * @param string $PrefCurrency
     */
    public function __construct($ExtraGuestCharges, $ChildCharges, $Discount, $OtherCharges, $ServiceTax, $IsPackageRate, $B2CRates, $AgentMarkUp, $Currency, $RoomFare, $RoomTax, $PrefPrice, $HeadGSAMarkUp, $TotalFare, $PrefCurrency)
    {
      $this->ExtraGuestCharges = $ExtraGuestCharges;
      $this->ChildCharges = $ChildCharges;
      $this->Discount = $Discount;
      $this->OtherCharges = $OtherCharges;
      $this->ServiceTax = $ServiceTax;
      $this->IsPackageRate = $IsPackageRate;
      $this->B2CRates = $B2CRates;
      $this->AgentMarkUp = $AgentMarkUp;
      $this->Currency = $Currency;
      $this->RoomFare = $RoomFare;
      $this->RoomTax = $RoomTax;
      $this->PrefPrice = $PrefPrice;
      $this->HeadGSAMarkUp = $HeadGSAMarkUp;
      $this->TotalFare = $TotalFare;
      $this->PrefCurrency = $PrefCurrency;
    }

    /**
     * @return ArrayOfDayRate
     */
    public function getDayRates()
    {
      return $this->DayRates;
    }

    /**
     * @param ArrayOfDayRate $DayRates
     * @return RoomRate
     */
    public function setDayRates($DayRates)
    {
      $this->DayRates = $DayRates;
      return $this;
    }

    /**
     * @return float
     */
    public function getExtraGuestCharges()
    {
      return $this->ExtraGuestCharges;
    }

    /**
     * @param float $ExtraGuestCharges
     * @return RoomRate
     */
    public function setExtraGuestCharges($ExtraGuestCharges)
    {
      $this->ExtraGuestCharges = $ExtraGuestCharges;
      return $this;
    }

    /**
     * @return float
     */
    public function getChildCharges()
    {
      return $this->ChildCharges;
    }

    /**
     * @param float $ChildCharges
     * @return RoomRate
     */
    public function setChildCharges($ChildCharges)
    {
      $this->ChildCharges = $ChildCharges;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return RoomRate
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getOtherCharges()
    {
      return $this->OtherCharges;
    }

    /**
     * @param float $OtherCharges
     * @return RoomRate
     */
    public function setOtherCharges($OtherCharges)
    {
      $this->OtherCharges = $OtherCharges;
      return $this;
    }

    /**
     * @return float
     */
    public function getServiceTax()
    {
      return $this->ServiceTax;
    }

    /**
     * @param float $ServiceTax
     * @return RoomRate
     */
    public function setServiceTax($ServiceTax)
    {
      $this->ServiceTax = $ServiceTax;
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
     * @return RoomRate
     */
    public function setIsPackageRate($IsPackageRate)
    {
      $this->IsPackageRate = $IsPackageRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getB2CRates()
    {
      return $this->B2CRates;
    }

    /**
     * @param boolean $B2CRates
     * @return RoomRate
     */
    public function setB2CRates($B2CRates)
    {
      $this->B2CRates = $B2CRates;
      return $this;
    }

    /**
     * @return float
     */
    public function getAgentMarkUp()
    {
      return $this->AgentMarkUp;
    }

    /**
     * @param float $AgentMarkUp
     * @return RoomRate
     */
    public function setAgentMarkUp($AgentMarkUp)
    {
      $this->AgentMarkUp = $AgentMarkUp;
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
     * @return RoomRate
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoomFare()
    {
      return $this->RoomFare;
    }

    /**
     * @param float $RoomFare
     * @return RoomRate
     */
    public function setRoomFare($RoomFare)
    {
      $this->RoomFare = $RoomFare;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoomTax()
    {
      return $this->RoomTax;
    }

    /**
     * @param float $RoomTax
     * @return RoomRate
     */
    public function setRoomTax($RoomTax)
    {
      $this->RoomTax = $RoomTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefPrice()
    {
      return $this->PrefPrice;
    }

    /**
     * @param string $PrefPrice
     * @return RoomRate
     */
    public function setPrefPrice($PrefPrice)
    {
      $this->PrefPrice = $PrefPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadGSAMarkUp()
    {
      return $this->HeadGSAMarkUp;
    }

    /**
     * @param string $HeadGSAMarkUp
     * @return RoomRate
     */
    public function setHeadGSAMarkUp($HeadGSAMarkUp)
    {
      $this->HeadGSAMarkUp = $HeadGSAMarkUp;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalFare()
    {
      return $this->TotalFare;
    }

    /**
     * @param float $TotalFare
     * @return RoomRate
     */
    public function setTotalFare($TotalFare)
    {
      $this->TotalFare = $TotalFare;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrefCurrency()
    {
      return $this->PrefCurrency;
    }

    /**
     * @param string $PrefCurrency
     * @return RoomRate
     */
    public function setPrefCurrency($PrefCurrency)
    {
      $this->PrefCurrency = $PrefCurrency;
      return $this;
    }

}
