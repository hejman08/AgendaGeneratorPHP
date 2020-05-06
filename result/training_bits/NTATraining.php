<?php 
global $NTATrainDays;
if ($NTATrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($NTATrainDays, "NTA User Training") . "</h2>\n";
        $html .= "<h3>NTA Training Topics</h3>\n";
        $html .= "<ul><li>Flow technologies and NBAR2</li>\n";
        $html .= "<ul><li>Netflow configuration example on Cisco device(s)</li></ul>\n";
        $html .= "<li>CBQoS polling</li>\n";
        $html .= "<li>IP address groups</li>\n";
        $html .= "<li>Custom application monitoring</li>\n";
        $html .= "<li>NTA flow navigator searches</li>\n";
        $html .= "<li>Custom NetFlow views</li>\n";
        $html .= "<li>Integrating endpoint-centric resources with node detail views</li>\n";
        $html .= "</ul>";
    }
?>