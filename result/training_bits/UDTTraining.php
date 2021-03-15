<?php 
global $UDTTrainDays;
if ($UDTTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($UDTTrainDays, "UDT User Training") . "</h2>\n"
        . "<h3>UDT Training Topics</h3>"
        . "<ul><li>Adding nodes and ports to UDT</li>\n"
        . "<li>Mapping ports to hostname, MAC address and/or IP address</li>\n"
        . "<li>Monitoring Active Directory domain controllers for user login data</li>\n"
        . "<li>White list management</li>\n"
        . "<li>Watch list management</li>\n"
        . "</ul>";
    }
?>