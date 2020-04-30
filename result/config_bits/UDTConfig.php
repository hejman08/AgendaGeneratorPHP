<?php 
global $UDTDays;
if ($UDTDays > 0)
    {
        $html .= "<h2>" . dayHeader($UDTDays, "UDT Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>UDT Configuration Tasks</h3>\n";
        $html .= "<ul><li>Importation/Configuration of Active Directory server(s) </li>\n";
        $html .= "<li>Device compatibility checker </li>\n";
        $html .= "<li>Importation of monitored switches/ports </li>\n";
        $html .= "<li>Configuration of White list </li>\n";
        $html .= "<li>Configuration of Watch list </li>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "<ul><li>Report creation</li>\n";
        $html .= "<li>Automation scheduling</li></ul>\n";
        $html .= "<li>Advanced alert creation</li>\n";
        $html .= "<ul><li>Notification</li>\n";
        $html .= "<li>Escalation</li></ul>\n";
        $html .= "</ul>";
    }
?>