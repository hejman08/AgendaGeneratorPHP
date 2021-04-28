<?php 
global $UDT200;
if ($UDT200 > 0)
    {
        $html .= "<h2>" . dayHeader($UDT200, "UDT Admin Training") . "</h2>\n"
        . "<h3>UDT Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>Understanding and using UDT</li>\n"
        . "<li>Adding nodes using UDT</li>\n"
        . "<li>Understanding Ports vs Interfaces</li>\n"
        . "<li>User Tracking</li>\n"
        . "<li>Working with Lists<br />\n"
        . "<ul>\n"
        . "<li>Whitelisting</li>\n"
        . "<li>Watch list</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Reports and Alerts</li>\n"
        . "</ul>\n";
        
    }
?>