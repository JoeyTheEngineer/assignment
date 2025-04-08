<?php
function postContacts($contactsXml) {
    $xsdPath = __DIR__ . '/contacts.xsd';

    $dom = new DOMDocument();
    $dom->loadXML($contactsXml);

    if (!$dom->schemaValidate($xsdPath)) {
        return '<message>Invalid XML</message>';
    }


    $xsl = new DOMDocument();
    $xsl->load('transform.xsl');
    $proc = new XSLTProcessor();
    $proc->importStylesheet($xsl);
    
    $transformed = $proc->transformToXML($dom);
    $xml = simplexml_load_string($transformed);

    // return "<message>" . htmlspecialchars($transformed) . "</message>";

    // $xml = simplexml_load_string($contactsXml);
    $inserted = 0;

    $mysqli = new mysqli("localhost", "root", "", "sample");

    if ($mysqli->connect_error) {
        return '<message>Database connection failed</message>';
    }

    $stmt = $mysqli->prepare("INSERT INTO contacts (Name, Email, Message, Age, UserMessage) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        return '<message>Failed to prepare insert statement</message>';
    }

    foreach ($xml->contact as $contact) {
        $name = (string)$contact->Name;
        $email = (string)$contact->Email;
        $message = (string)$contact['Message'];
        $age = (int)$contact->Age;
        // $dob = (date)$contact->dob;
        $userMessage = (string)$contact->UserMessage;

        $stmt->bind_param("sssds", $name, $email, $message, $age, $userMessage);
        if ($stmt->execute()) {
            $inserted++;
        }
    }

    $stmt->close();
    $mysqli->close();

    return "<message>$inserted rows inserted</message>";
}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("postContacts.wsdl");
$server->addFunction("postContacts");
$server->handle();
?>
