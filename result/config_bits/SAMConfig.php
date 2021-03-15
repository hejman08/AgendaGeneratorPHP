<?php 
global $SAMDays;
if ($SAMDays > 0)
    {
        $html .=  "<h2>" . dayHeader($SAMDays, "SAM Best Practices Configuration") . "</h2>\n"
        .  "<h3>SAM Configuration Tasks</h3>\n"
        .  "<ul>"
        .  "<li>Credential library configuration / validation</li>\n"
        .  "<li>Configuration of custom application templates</li>\n"
        .  "<li>Assignment of custom application templates</li>\n"
        .  "<li>Configuration of baseline settings</li>\n"
        .  "<li>Configuration/Assignment of AppInsight templates</li>\n"
        .  "<ul><li>MS SQL</li>\n"
        .  "<li>MS IIS</li>\n"
        .  "<li>Active Directory</li>\n"
        .  "<li>MS Exchange</li></ul>\n"
        .  "<li>Fine tuning of custom application templates based on collected statistic data</li>\n"
        .  "<ul><li>Configure application Warning/Critical thresholds</li></ul>\n"
        .  "<li>Configuration of SAM custom properties</li>\n"
        .  "<li>Configuration of Application groups</li>\n"
        .  "<li>Configuration of Application dependencies</li>\n"
        .  "<li>Configuration of Application dashboards</li>\n"
        .  "<li>AppStack overview</li>\n"
        .  "<li>Amazon (AWS) EC2 instance monitoring overview</li>\n"
        .  "<li>Reporting Overview</li>\n"
        .  "<ul><li>Report creation</li>\n"
        .  "<li>Automation scheduling</li></ul>\n"
        .  "<li>Advanced alert configuration</li>\n"
        .  "<ul><li>Noise reduction</li>\n"
        .  "<li>Notification</li>\n"
        .  "<li>Escalation</li>\n"
        .  "<li>Severity</li></ul>\n"
        .  "</ul>";
    }
?>