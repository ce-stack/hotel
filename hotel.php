<?php 


foreach (glob("webservice/*.php") as $filename)
{
    include $filename;
}

try {
    $hotelService = new HotelService(
        [
            'location' => 'https://api.tbotechnology.in/HotelAPI_V7/HotelService.svc',
            'soap_version' => SOAP_1_2,
            'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
            'trace' => true,
        ], "https://api.tbotechnology.in/HotelAPI_V7/HotelService.svc?wsdl"
    );

    $soapHeaders = array();
    $soapHeaders[] = new \SoapHeader('http://TekTravel/HotelBookingApi', 'Credentials',
        ['UserName' => 'Tammtest', 'Password' => 'Tam@18418756']);
    $soapHeaders[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To',
        'https://api.tbotechnology.in/hotelapi_v7/hotelservice.svc');
    $soapHeaders[] =
        new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', 'http://TekTravel/HotelBookingApi/HotelSearch');

    $HotelSearchRequest = new HotelSearchRequest();

    $hotelService->__setSoapHeaders($soapHeaders);

    $HotelSearch =  $hotelService->HotelSearchRequest($HotelSearchRequest);
} catch (\Exception $exception) {
    $exception->getMessage();
    
}

print_r($HotelSearch);







?>