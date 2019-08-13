<?php

class GenerateInvoiceRequest
{

    /**
     * @var int $BookingId
     */
    protected $BookingId = null;

    /**
     * @var string $ConfirmationNo
     */
    protected $ConfirmationNo = null;

    /**
     * @var PaymentInfo $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @param int $BookingId
     * @param string $ConfirmationNo
     * @param PaymentInfo $PaymentInfo
     */
    public function __construct($BookingId, $ConfirmationNo, $PaymentInfo)
    {
      $this->BookingId = $BookingId;
      $this->ConfirmationNo = $ConfirmationNo;
      $this->PaymentInfo = $PaymentInfo;
    }

    /**
     * @return int
     */
    public function getBookingId()
    {
      return $this->BookingId;
    }

    /**
     * @param int $BookingId
     * @return GenerateInvoiceRequest
     */
    public function setBookingId($BookingId)
    {
      $this->BookingId = $BookingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationNo()
    {
      return $this->ConfirmationNo;
    }

    /**
     * @param string $ConfirmationNo
     * @return GenerateInvoiceRequest
     */
    public function setConfirmationNo($ConfirmationNo)
    {
      $this->ConfirmationNo = $ConfirmationNo;
      return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo $PaymentInfo
     * @return GenerateInvoiceRequest
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

}
