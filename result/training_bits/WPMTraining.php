<?php 
global $WPMTrainDays;
if ($WPMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($WPMTrainDays, "WPM User Training") . "</h2>\n";
        $html .= "<h3>WPM Training Topics</h3>\n";
        $html .= "<ul><li>Licensing considerations</li>\n";
        $html .= "<li>Permissions needed</li>\n";
        $html .= "<ul><li>Domain access</li></ul>\n";
        $html .= "<li>Load balancing</li>\n";
        $html .= "<li>Installation</li>\n";
        $html .= "<ul><li>Module based install</li>\n";
        $html .= "<ul><li>Main poller</li>\n";
        $html .= "<li>Additional poller</li>\n";
        $html .= "<li>Transaction player servers</li></ul></ul>\n";
        $html .= "<li>Transactions</li>\n";
        $html .= "<ul><li>Recordings</li>\n";
        $html .= "<li>Players</li>\n";
        $html .= "<ul><li>Local</li>\n";
        $html .= "<li>Cloud based</li></ul></ul>\n";
        $html .= "<li>Registering to Orion</li>\n";
        $html .= "<li>Monitoring transaction playback</li>\n";
        $html .= "<li>AppStack integration</li>\n";
        $html .= "<li>Alerting</li>\n";
        $html .= "<ul><li>Notification</li>\n";
        $html .= "<li>Escalation</li>\n";
        $html .= "<li>Severity</li></ul>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "<ul><li>Canned reports</li>\n";
        $html .= "<li>Creating reports</li>\n";
        $html .= "<li>Scheduling reports</li></ul>\n";
        $html .= "</ul>";
        $html .= "</ul>";
    }
?>