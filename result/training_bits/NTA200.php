<?php 
global $NTATrainDays;
if ($NTATrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($NTATrainDays, "NTA User Training") . "</h2>\n"
        . "<h3>NTA Training Topics</h3>\n"
        . "<ul><li>Flow technologies and NBAR2</li>\n"
        . "<ul><li>Netflow configuration example on Cisco device(s)</li></ul>\n"
        . "<li>CBQoS polling</li>\n"
        . "<li>IP address groups</li>\n"
        . "<li>Custom application monitoring</li>\n"
        . "<li>NTA flow navigator searches</li>\n"
        . "<li>Custom NetFlow views</li>\n"
        . "<li>Integrating endpoint-centric resources with node detail views</li>\n"
        . "</ul>";
    }
?>