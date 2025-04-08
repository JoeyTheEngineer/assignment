<?php
function getAllContacts() {
    return [
        'contacts' => [
            [
                'Name' => 'New Age Jewels',
                'Email' => 'Jewel@gmail.com',
                'Message' => 'Hello'
            ],
            [
                'Name' => 'John Smith',
                'Email' => 'john@gmail.com',
                'Message' => 'Hi'
            ]
        ]
    ];
}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("getContacts.wsdl");
$server->addFunction("getAllContacts");
$server->handle();
?>
