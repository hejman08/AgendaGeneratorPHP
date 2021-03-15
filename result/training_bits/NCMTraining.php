<?php 
global $NCMTrainDays;
if ($NCMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($NCMTrainDays, "NCM User Training") . "</h2>\n"
        . "<h3>NCM Training Topics</h3>\n"
        . "<ul><li>NCM user permissions</li>\n"
        . "<li>Adding nodes to NCM</li>\n"
        . "<ul><li>NCM connection profiles</li>\n"
        . "<li>NCM device templates</li></ul>\n"
        . "<li>NCM jobs and scheduling backups</li>\n"
        . "<li>Network Insight for Cisco ASA</li>\n"
        . "<li>Executing scripts and bulk changes</li>\n"
        . "<li>Real-time configuration change detection</li>\n"
        . "<li>Compliance policy reports</li>\n"
        . "<li>End of sales/end of support reporting</li>\n"
        . "<li>Cisco & Juniper firmware vulnerabilities reporting</li>\n"
        . "<li>Introduction to configuration change templates</li>\n"
        . "</ul>";
    }
?>