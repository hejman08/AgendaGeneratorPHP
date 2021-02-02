<?php 
global $SAMDays;
if ($SAMDays > 0)
    {
        $html .= "<h2>" . dayHeader($SAMDays, "SAM Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>SAM Configuration Tasks</h3>\n";
        $html .= "<ul>";
        $html .= "<li>Credential library configuration / validation</li>\n";
        $html .= "<li>Configuration of custom application templates</li>\n";
        $html .= "<li>Assignment of custom application templates</li>\n";
        $html .= "<li>Configuration of baseline settings</li>\n";
        $html .= "<li>Configuration/Assignment of AppInsight templates</li>\n";
        $html .= "<ul><li>MS SQL</li>\n";
        $html .= "<li>MS IIS</li>\n";
        $html .= "<li>Active Directory</li>\n";
        $html .= "<li>MS Exchange</li></ul>\n";
        $html .= "<li>Fine tuning of custom application templates based on collected statistic data</li>\n";
        $html .= "<ul><li>Configure application Warning/Critical thresholds</li></ul>\n";
        $html .= "<li>Configuration of SAM custom properties</li>\n";
        $html .= "<li>Configuration of Application groups</li>\n";
        $html .= "<li>Configuration of Application dependencies</li>\n";
        $html .= "<li>Configuration of Application dashboards</li>\n";
        $html .= "<li>AppStack overview</li>\n";
        $html .= "<li>Amazon (AWS) EC2 instance monitoring overview</li>\n";
        $html .= "<li>Reporting Overview</li>\n";
        $html .= "<ul><li>Report creation</li>\n";
        $html .= "<li>Automation scheduling</li></ul>\n";
        $html .= "<li>Advanced alert configuration</li>\n";
        $html .= "<ul><li>Noise reduction</li>\n";
        $html .= "<li>Notification</li>\n";
        $html .= "<li>Escalation</li>\n";
        $html .= "<li>Severity</li></ul>\n";
        $html .= "</ul>";
    }
?>