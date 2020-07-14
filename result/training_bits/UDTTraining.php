<?php 
global $UDTTrainDays;
if ($UDTTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($UDTTrainDays, "UDT User Training") . "</h2>\n";
        $html .= "<h3>UDT Training Topics</h3>";
        $html .= "<ul><li>Adding nodes and ports to UDT</li>\n";
        $html .= "<li>Mapping ports to hostname, MAC address and/or IP address</li>\n";
        $html .= "<li>Monitoring Active Directory domain controllers for user login data</li>\n";
        $html .= "<li>White list management</li>\n";
        $html .= "<li>Watch list management</li>\n";
        $html .= "</ul>";
    }
?>