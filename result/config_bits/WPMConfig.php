<?php 
global $WPMDays;
if ($WPMDays > 0)
    {
        $html .= "<h2>" . dayHeader($WPMDays, "WPM Best Practices Configuration") . "</h2>\n"
        . "<h3>WPM Configuration Tasks</h3>\n"
        . "<ul><li>Configuration of main application</li>\n"
        . "<li>Configuration of player(s)</li>\n"
        . "<li>Configuration of transactions</li>\n"
        . "<li>Assignment of transactions</li>\n"
        . "<li>AppStack Overview</li>\n"
        . "<li>Advanced alert configuration </li>\n"
        . "<ul><li>Noise Reduction</li>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "<li>Severity</li></ul>\n"
        . "<li>Reporting</li>\n"
        . "<ul><li>Report creation</li>\n"
        . "<li>Automation scheduling</li></ul>\n"
        . "</ul>";
    }
?>