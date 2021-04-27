<?php 
global $WPMDays;
if ($WPMDays > 0)
    {
        $html .= "<h2>" . dayHeader($WPMDays, "WPM Best Practices Configuration") . "</h2>\n"
        . "<h3>WPM Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Configuration of player(s)</li>\n"
        . "<li>Configuration of transactions</li>\n"
        . "<li>Assignment of transactions</li>\n"
        . "<li>Advanced alert configuration</li>\n"
        . "<ul>\n"
        . "<li>Noise Reduction</li>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "<li>Severity</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>WPM Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Reporting</li>\n"
        . "<ul>\n"
        . "<li>Report creation</li>\n"
        . "<li>Automation scheduling</li>\n"
        . "</ul>\n"
        . "</ul>\n";
        
    }
?>