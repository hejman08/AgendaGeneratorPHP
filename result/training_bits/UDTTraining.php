<?php 
global $UDTTrainDays;
if ($UDTTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($UDTTrainDays, "UDT User Training") . "</h2>\n";
        $html .= "<h3>NCM Training Topics</h3>\n";
        $html .= "<ul><li>NCM user permissions</li>\n";
        $html .= "<li>Adding nodes to NCM</li>\n";
        $html .= "<ul><li>NCM connection profiles</li>\n";
        $html .= "<li>NCM device templates</li></ul>\n";
        $html .= "<li>NCM jobs and scheduling backups</li>\n";
        $html .= "<li>Network Insight for Cisco ASA</li>\n";
        $html .= "<li>Executing scripts and bulk changes</li>\n";
        $html .= "<li>Real-time configuration change detection</li>\n";
        $html .= "<li>Compliance policy reports</li>\n";
        $html .= "<li>End of sales/end of support reporting</li>\n";
        $html .= "<li>Cisco & Juniper firmware vulnerabilities reporting</li>\n";
        $html .= "<li>Introduction to configuration change templates</li>\n";
        $html .= "</ul>";
    }
?>