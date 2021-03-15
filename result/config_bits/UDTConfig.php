<?php 
global $UDTDays;
if ($UDTDays > 0)
    {
        $html .= "<h2>" . dayHeader($UDTDays, "UDT Best Practices Configuration") . "</h2>\n"
        . "<h3>UDT Configuration Tasks</h3>\n"
        . "<ul><li>Importation/Configuration of Active Directory server(s) </li>\n"
        . "<li>Device compatibility checker </li>\n"
        . "<li>Importation of monitored switches/ports </li>\n"
        . "<li>Configuration of White list </li>\n"
        . "<li>Configuration of Watch list </li>\n"
        . "<li>Reporting</li>\n"
        . "<ul><li>Report creation</li>\n"
        . "<li>Automation scheduling</li></ul>\n"
        . "<li>Advanced alert creation</li>\n"
        . "<ul><li>Notification</li>\n"
        . "<li>Escalation</li></ul>\n"
        . "</ul>";
    }
?>