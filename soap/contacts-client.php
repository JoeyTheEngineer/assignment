<?php
ini_set("soap.wsdl_cache_enabled", "0");

$client = new SoapClient("getContacts.wsdl");

$result = $client->getAllContacts();

echo $result;
// foreach ($result->contacts as $contact) {
//     echo "Name: " . $contact->Name . "\n";
//     echo "Email: " . $contact->Email . "\n";
//     echo "Message: " . $contact->Message . "\n";
//     echo "----------------------\n";
// }
?>
