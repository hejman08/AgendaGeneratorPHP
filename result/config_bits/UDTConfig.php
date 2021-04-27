<?php 
global $UDTDays;
if ($UDTDays > 0)
    {
        $html .= "<h2>" . dayHeader($UDTDays, "UDT Best Practices Configuration") . "</h2>\n"
        . "<h3>UDT Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Import of monitored switches/ports</li>\n"
        . "<li>Advanced alert creation</li>\n"
        . "<ul>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>UDT Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Import/Configuration of Active Directory server(s)</li>\n"
        . "<li>Configuration of Whitelist</li>\n"
        . "<li>Configuration of Watch list</li>\n"
        . "<li>Reporting</li>\n"
        . "<ul>\n"
        . "<li>Report creation</li>\n"
        . "<li>Automation scheduling</li>\n"
        . "</ul>\n"
        . "</ul>\n";
        
    }
?>