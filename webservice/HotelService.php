<?php

class HotelService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'HotelSearchRequest' => '\\HotelSearchRequest',
  'ArrayOfRoomGuest' => '\\ArrayOfRoomGuest',
  'RoomGuest' => '\\RoomGuest',
  'ArrayOfInt' => '\\ArrayOfInt',
  'Filters' => '\\Filters',
  'GeoCodes' => '\\GeoCodes',
  'AuthenticationData' => '\\AuthenticationData',
  'HotelSearchResponse' => '\\HotelSearchResponse',
  'ResponseStatus' => '\\ResponseStatus',
  'ArrayOfHotel_Result' => '\\ArrayOfHotel_Result',
  'Hotel_Result' => '\\Hotel_Result',
  'HotelInfo' => '\\HotelInfo',
  'MinHotelPrice' => '\\MinHotelPrice',
  'ArrayOfRooms' => '\\ArrayOfRooms',
  'Rooms' => '\\Rooms',
  'HotelRoomAvailabilityRequest' => '\\HotelRoomAvailabilityRequest',
  'HotelRoomAvailabilityResponse' => '\\HotelRoomAvailabilityResponse',
  'ArrayOfHotel_Room' => '\\ArrayOfHotel_Room',
  'Hotel_Room' => '\\Hotel_Room',
  'RoomRate' => '\\RoomRate',
  'ArrayOfDayRate' => '\\ArrayOfDayRate',
  'DayRate' => '\\DayRate',
  'ArrayOfSupplement' => '\\ArrayOfSupplement',
  'Supplement' => '\\Supplement',
  'RoomInformation' => '\\RoomInformation',
  'ArrayOfString' => '\\ArrayOfString',
  'ArrayOfString1' => '\\ArrayOfString1',
  'CancelPolicies' => '\\CancelPolicies',
  'CancelPolicy' => '\\CancelPolicy',
  'BookingOptions' => '\\BookingOptions',
  'RoomCombination' => '\\RoomCombination',
  'HotelCancellationPolicyRequest' => '\\HotelCancellationPolicyRequest',
  'HotelCancellationPolicyResponse' => '\\HotelCancellationPolicyResponse',
  'ArrayOfString2' => '\\ArrayOfString2',
  'HotelBookRequest' => '\\HotelBookRequest',
  'ArrayOfGuest' => '\\ArrayOfGuest',
  'Guest' => '\\Guest',
  'AddressInfo' => '\\AddressInfo',
  'PaymentInfo' => '\\PaymentInfo',
  'ArrayOfRequestedRooms' => '\\ArrayOfRequestedRooms',
  'RequestedRooms' => '\\RequestedRooms',
  'Rate' => '\\Rate',
  'ArrayOfSuppInfo' => '\\ArrayOfSuppInfo',
  'SuppInfo' => '\\SuppInfo',
  'ArrayOfSpecialRequest' => '\\ArrayOfSpecialRequest',
  'SpecialRequest' => '\\SpecialRequest',
  'HotelBookResponse' => '\\HotelBookResponse',
  'PriceChangeStatus' => '\\PriceChangeStatus',
  'AvailabilityAndPricingRequest' => '\\AvailabilityAndPricingRequest',
  'AvailabilityAndPricingResponse' => '\\AvailabilityAndPricingResponse',
  'HotelCancellationPolicies' => '\\HotelCancellationPolicies',
  'PriceVerification' => '\\PriceVerification',
  'AccountInfo' => '\\AccountInfo',
  'HotelDetailsVerification' => '\\HotelDetailsVerification',
  'APIHotelDetails' => '\\APIHotelDetails',
  'ArrayOfString3' => '\\ArrayOfString3',
  'ArrayOfString4' => '\\ArrayOfString4',
  'ArrayOfString5' => '\\ArrayOfString5',
  'ArrayOfRoomInfo' => '\\ArrayOfRoomInfo',
  'RoomInfo' => '\\RoomInfo',
  'ArrayOfString6' => '\\ArrayOfString6',
  'ArrayOfString7' => '\\ArrayOfString7',
  'HotelBookingDetailRequest' => '\\HotelBookingDetailRequest',
  'HotelBookingDetailResponse' => '\\HotelBookingDetailResponse',
  'APIBookingDetail' => '\\APIBookingDetail',
  'ArrayOfRoomDetails' => '\\ArrayOfRoomDetails',
  'RoomDetails' => '\\RoomDetails',
  'ArrayOfSupp_info' => '\\ArrayOfSupp_info',
  'Supp_info' => '\\Supp_info',
  'AmendmentDetails' => '\\AmendmentDetails',
  'AgencyDetails' => '\\AgencyDetails',
  'AOTNumbers' => '\\AOTNumbers',
  'GenerateInvoiceRequest' => '\\GenerateInvoiceRequest',
  'GenerateInvoiceResponse' => '\\GenerateInvoiceResponse',
  'AmendmentRequest' => '\\AmendmentRequest',
  'AmendmentRequestType' => '\\AmendmentRequestType',
  'AmendInformation' => '\\AmendInformation',
  'CheckInReq' => '\\CheckInReq',
  'CheckOutReq' => '\\CheckOutReq',
  'ArrayOfRoomReq' => '\\ArrayOfRoomReq',
  'RoomReq' => '\\RoomReq',
  'AmendGuestReq' => '\\AmendGuestReq',
  'AmendmentResponse' => '\\AmendmentResponse',
  'ApprovalInformation' => '\\ApprovalInformation',
  'ArrayOfRoomPriceRes' => '\\ArrayOfRoomPriceRes',
  'RoomPriceRes' => '\\RoomPriceRes',
  'TotalPrice' => '\\TotalPrice',
  'AmendmentRequested' => '\\AmendmentRequested',
  'CheckInRes' => '\\CheckInRes',
  'CheckOutRes' => '\\CheckOutRes',
  'ArrayOfRoomRes' => '\\ArrayOfRoomRes',
  'RoomRes' => '\\RoomRes',
  'AmendGuestRes' => '\\AmendGuestRes',
  'HotelCancelRequest' => '\\HotelCancelRequest',
  'HotelCancelResponse' => '\\HotelCancelResponse',
  'CountryListRequest' => '\\CountryListRequest',
  'CountryListResponse' => '\\CountryListResponse',
  'ArrayOfCountryList' => '\\ArrayOfCountryList',
  'CountryList' => '\\CountryList',
  'DestinationCityListRequest' => '\\DestinationCityListRequest',
  'DestinationCityListResponse' => '\\DestinationCityListResponse',
  'ArrayOfCityList' => '\\ArrayOfCityList',
  'CityList' => '\\CityList',
  'TopDestinationsRequest' => '\\TopDestinationsRequest',
  'TopDestinationsResponse' => '\\TopDestinationsResponse',
  'HotelDetailsRequest' => '\\HotelDetailsRequest',
  'HotelDetailsResponse' => '\\HotelDetailsResponse',
  'HotelCodesRequest' => '\\HotelCodesRequest',
  'HotelCodesResponse' => '\\HotelCodesResponse',
  'ArrayOfHotels' => '\\ArrayOfHotels',
  'Hotels' => '\\Hotels',
  'HotelSearchWithRoomsRequest' => '\\HotelSearchWithRoomsRequest',
  'HotelSearchWithRoomsFilters' => '\\HotelSearchWithRoomsFilters',
  'HotelSearchWithRoomsResponse' => '\\HotelSearchWithRoomsResponse',
  'ArrayOfHotel_ResultWithRooms' => '\\ArrayOfHotel_ResultWithRooms',
  'Hotel_ResultWithRooms' => '\\Hotel_ResultWithRooms',
  'HotelBookingDetailBasedOnDateRequest' => '\\HotelBookingDetailBasedOnDateRequest',
  'HotelBookingDetailBasedOnDateResponse' => '\\HotelBookingDetailBasedOnDateResponse',
  'ArrayOfBookingsBasedOnDate' => '\\ArrayOfBookingsBasedOnDate',
  'BookingsBasedOnDate' => '\\BookingsBasedOnDate',
  'GiataHotelCodesRequest' => '\\GiataHotelCodesRequest',
  'GiataHotelCodesResponse' => '\\GiataHotelCodesResponse',
  'ArrayOfGiataHotels' => '\\ArrayOfGiataHotels',
  'GiataHotels' => '\\GiataHotels',
  'ArrayOfAPIHotelDetails' => '\\ArrayOfAPIHotelDetails',
  'TagInfoRequest' => '\\TagInfoRequest',
  'TagInfoResponse' => '\\TagInfoResponse',
  'ArrayOfTagInfos' => '\\ArrayOfTagInfos',
  'TagInfos' => '\\TagInfos',
  'CityWiseNotificationRequest' => '\\CityWiseNotificationRequest',
  'CityWiseNotificationResponse' => '\\CityWiseNotificationResponse',
  'ArrayOfCityWiseNotification' => '\\ArrayOfCityWiseNotification',
  'CityWiseNotification' => '\\CityWiseNotification',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://api.tbotechnology.in/hotelapi_v7/hotelservice.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param HotelSearchRequest $parameters
     * @return HotelSearchResponse
     */
    public function HotelSearch(HotelSearchRequest $parameters)
    {
      return $this->__soapCall('HotelSearch', array($parameters));
    }

    /**
     * @param HotelRoomAvailabilityRequest $parameters
     * @return HotelRoomAvailabilityResponse
     */
    public function AvailableHotelRooms(HotelRoomAvailabilityRequest $parameters)
    {
      return $this->__soapCall('AvailableHotelRooms', array($parameters));
    }

    /**
     * @param HotelCancellationPolicyRequest $parameters
     * @return HotelCancellationPolicyResponse
     */
    public function HotelCancellationPolicy(HotelCancellationPolicyRequest $parameters)
    {
      return $this->__soapCall('HotelCancellationPolicy', array($parameters));
    }

    /**
     * @param HotelCancellationPolicyRequest $parameters
     * @return HotelCancellationPolicyResponse
     */
    public function HotelCancellationPolicyForAllRooms(HotelCancellationPolicyRequest $parameters)
    {
      return $this->__soapCall('HotelCancellationPolicyForAllRooms', array($parameters));
    }

    /**
     * @param HotelBookRequest $parameters
     * @return HotelBookResponse
     */
    public function HotelBook(HotelBookRequest $parameters)
    {
      return $this->__soapCall('HotelBook', array($parameters));
    }

    /**
     * @param AvailabilityAndPricingRequest $parameters
     * @return AvailabilityAndPricingResponse
     */
    public function AvailabilityAndPricing(AvailabilityAndPricingRequest $parameters)
    {
      return $this->__soapCall('AvailabilityAndPricing', array($parameters));
    }

    /**
     * @param HotelBookingDetailRequest $parameters
     * @return HotelBookingDetailResponse
     */
    public function HotelBookingDetail(HotelBookingDetailRequest $parameters)
    {
      return $this->__soapCall('HotelBookingDetail', array($parameters));
    }

    /**
     * @param GenerateInvoiceRequest $parameters
     * @return GenerateInvoiceResponse
     */
    public function GenerateInvoice(GenerateInvoiceRequest $parameters)
    {
      return $this->__soapCall('GenerateInvoice', array($parameters));
    }

    /**
     * @param AmendmentRequest $parameters
     * @return AmendmentResponse
     */
    public function Amendment(AmendmentRequest $parameters)
    {
      return $this->__soapCall('Amendment', array($parameters));
    }

    /**
     * @param HotelCancelRequest $parameters
     * @return HotelCancelResponse
     */
    public function HotelCancel(HotelCancelRequest $parameters)
    {
      return $this->__soapCall('HotelCancel', array($parameters));
    }

    /**
     * @param CountryListRequest $parameters
     * @return CountryListResponse
     */
    public function CountryList(CountryListRequest $parameters)
    {
      return $this->__soapCall('CountryList', array($parameters));
    }

    /**
     * @param DestinationCityListRequest $parameters
     * @return DestinationCityListResponse
     */
    public function DestinationCityList(DestinationCityListRequest $parameters)
    {
      return $this->__soapCall('DestinationCityList', array($parameters));
    }

    /**
     * @param TopDestinationsRequest $parameters
     * @return TopDestinationsResponse
     */
    public function TopDestinations(TopDestinationsRequest $parameters)
    {
      return $this->__soapCall('TopDestinations', array($parameters));
    }

    /**
     * @param HotelDetailsRequest $parameters
     * @return HotelDetailsResponse
     */
    public function HotelDetails(HotelDetailsRequest $parameters)
    {
      return $this->__soapCall('HotelDetails', array($parameters));
    }

    /**
     * @param HotelCodesRequest $parameters
     * @return HotelCodesResponse
     */
    public function HotelCodeList(HotelCodesRequest $parameters)
    {
      return $this->__soapCall('HotelCodeList', array($parameters));
    }

    /**
     * @param HotelSearchWithRoomsRequest $parameters
     * @return HotelSearchWithRoomsResponse
     */
    public function HotelSearchWithRooms(HotelSearchWithRoomsRequest $parameters)
    {
      return $this->__soapCall('HotelSearchWithRooms', array($parameters));
    }

    /**
     * @param HotelBookingDetailBasedOnDateRequest $parameters
     * @return HotelBookingDetailBasedOnDateResponse
     */
    public function HotelBookingDetailBasedOnDate(HotelBookingDetailBasedOnDateRequest $parameters)
    {
      return $this->__soapCall('HotelBookingDetailBasedOnDate', array($parameters));
    }

    /**
     * @param GiataHotelCodesRequest $parameters
     * @return GiataHotelCodesResponse
     */
    public function GiataHotelCodeList(GiataHotelCodesRequest $parameters)
    {
      return $this->__soapCall('GiataHotelCodeList', array($parameters));
    }

    /**
     * @param TagInfoRequest $parameters
     * @return TagInfoResponse
     */
    public function TagInfo(TagInfoRequest $parameters)
    {
      return $this->__soapCall('TagInfo', array($parameters));
    }

    /**
     * @param CityWiseNotificationRequest $parameters
     * @return CityWiseNotificationResponse
     */
    public function CityWiseNotification(CityWiseNotificationRequest $parameters)
    {
      return $this->__soapCall('CityWiseNotification', array($parameters));
    }

}
