<?php

class PaymentInfo
{

    /**
     * @var boolean $VoucherBooking
     */
    protected $VoucherBooking = null;

    /**
     * @var PaymentModeType $PaymentModeType
     */
    protected $PaymentModeType = null;

    /**
     * @var string $CvvNumber
     */
    protected $CvvNumber = null;

    /**
     * @param boolean $VoucherBooking
     * @param PaymentModeType $PaymentModeType
     * @param string $CvvNumber
     */
    public function __construct($VoucherBooking, $PaymentModeType, $CvvNumber)
    {
      $this->VoucherBooking = $VoucherBooking;
      $this->PaymentModeType = $PaymentModeType;
      $this->CvvNumber = $CvvNumber;
    }

    /**
     * @return boolean
     */
    public function getVoucherBooking()
    {
      return $this->VoucherBooking;
    }

    /**
     * @param boolean $VoucherBooking
     * @return PaymentInfo
     */
    public function setVoucherBooking($VoucherBooking)
    {
      $this->VoucherBooking = $VoucherBooking;
      return $this;
    }

    /**
     * @return PaymentModeType
     */
    public function getPaymentModeType()
    {
      return $this->PaymentModeType;
    }

    /**
     * @param PaymentModeType $PaymentModeType
     * @return PaymentInfo
     */
    public function setPaymentModeType($PaymentModeType)
    {
      $this->PaymentModeType = $PaymentModeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCvvNumber()
    {
      return $this->CvvNumber;
    }

    /**
     * @param string $CvvNumber
     * @return PaymentInfo
     */
    public function setCvvNumber($CvvNumber)
    {
      $this->CvvNumber = $CvvNumber;
      return $this;
    }

}
