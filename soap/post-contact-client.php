<?php
// The XML input with multiple contacts
$contactsXml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Contacts>
  <contact Message="OK">
    <Name>Jane Doe</Name>
    <Email>jane@example.com</Email>
    <dob>1990-04-08</dob>
    <UserMessage>e4testtest!</UserMessage>
  </contact>
</Contacts>
XML;

try {
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("postContacts.wsdl");

    // Call the SOAP method with the XML string
    $response = $client->postContacts($contactsXml);

    // Output the XML response
    header("Content-Type: text/xml");
    echo $response;
} catch (SoapFault $e) {
    echo "SOAP Fault: " . $e->getMessage();
}
?>
