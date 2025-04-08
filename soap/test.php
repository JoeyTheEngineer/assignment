<?php
libxml_use_internal_errors(true);

// Load input XML string
$xmlString = <<<XML
<contact>
  <Name>Jane Doe</Name>
  <Email>jane@example.com</Email>
  <dob>1990-04-08</dob>
</contact>
XML;

// Load XML into DOMDocument
$xml = new DOMDocument();
if (!$xml->loadXML($xmlString)) {
    echo "Failed to load XML.\n";
    foreach (libxml_get_errors() as $error) {
        echo "XML Error: " . $error->message;
    }
    exit;
}

// Load XSLT from external file
$xsl = new DOMDocument();
if (!$xsl->load("transform.xsl")) {
    echo "Failed to load transform.xsl\n";
    exit;
}

// Apply the XSLT transformation
$xslt = new XSLTProcessor();
$xslt->importStylesheet($xsl);

$transformed = $xslt->transformToXML($xml);

if (!$transformed) {
    echo "Transformation failed.\n";
    foreach (libxml_get_errors() as $error) {
        echo "XSLT Error: " . $error->message;
    }
    exit;
}

echo "=== TRANSFORMED XML ===\n";
echo $transformed;

// Try loading result into SimpleXML
$simpleXml = simplexml_load_string($transformed);
if ($simpleXml === false) {
    echo "\n\n=== SIMPLEXML PARSE ERROR ===\n";
    foreach (libxml_get_errors() as $error) {
        echo "Parse error: " . $error->message;
    }
} else {
    echo "\n\n=== PARSED AS SIMPLEXML ===\n";
    echo "Name: " . $simpleXml->contact->Name . "\n";
    echo "Age: " . $simpleXml->contact->Age . "\n";
}
?>
