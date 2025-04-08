<?php
// Allow AJAX
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/xml");

// Get raw XML
$xmlData = file_get_contents("php://input");

// Create SoapClient
try {
    $client = new SoapClient("http://localhost/assignment/soap/postContacts.wsdl", [
        'cache_wsdl' => WSDL_CACHE_NONE,
        'trace' => true
    ]);

    // Call your SOAP method
    $response = $client->postContacts($xmlData);

    // Return plain XML back to browser
    echo $response;

} catch (SoapFault $e) {
    http_response_code(500);
    echo "<error>SOAP Error: {$e->getMessage()}</error>";
}
