<?php 
global $WPMDays;
if ($WPMDays > 0)
    {
        $html .= "<h2>" . dayHeader($WPMDays, "WPM Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>WPM Configuration Tasks</h3>\n";
        $html .= "<ul><li>Configuration of main application</li>\n";
        $html .= "<li>Configuration of player(s)</li>\n";
        $html .= "<li>Configuration of transactions</li>\n";
        $html .= "<li>Assignment of transactions</li>\n";
        $html .= "<li>AppStack Overview</li>\n";
        $html .= "<li>Advanced alert configuration </li>\n";
        $html .= "<ul><li>Noise Reduction</li>\n";
        $html .= "<li>Notification</li>\n";
        $html .= "<li>Escalation</li>\n";
        $html .= "<li>Severity</li></ul>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "<ul><li>Report creation</li>\n";
        $html .= "<li>Automation scheduling</li></ul>\n";
        $html .= "</ul>";
    }
?>