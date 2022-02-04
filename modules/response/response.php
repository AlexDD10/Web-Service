<?php
$xmlstr = <<<XML
    <xml_response>
    <datetime>$date</datetime>
    <call_params>
        <method>$method</method>
        <p1>$p1</p1>
        <p2>$p2</p2>
        <p3>$p3</p3>
    </call_params>
    <error_info>
        <error_num>$err</error_num>
        <error_description>$err_desc</error_description>
    </error_info>
    <response_value>$response</response_value>
    </xml_response>
XML;

header ("Content-Type:text/xml");
$xml = new SimpleXMLElement($xmlstr);
echo $xml->asXML();
?>