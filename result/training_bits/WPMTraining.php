<?php 
global $WPMTrainDays;
if ($WPMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($WPMTrainDays, "WPM User Training") . "</h2>\n"
        . "<h3>WPM Training Topics</h3>\n"
        . "<ul><li>Licensing considerations</li>\n"
        . "<li>Permissions needed</li>\n"
        . "<ul><li>Domain access</li></ul>\n"
        . "<li>Load balancing</li>\n"
        . "<li>Installation</li>\n"
        . "<ul><li>Module based install</li>\n"
        . "<ul><li>Main poller</li>\n"
        . "<li>Additional poller</li>\n"
        . "<li>Transaction player servers</li></ul></ul>\n"
        . "<li>Transactions</li>\n"
        . "<ul><li>Recordings</li>\n"
        . "<li>Players</li>\n"
        . "<ul><li>Local</li>\n"
        . "<li>Cloud based</li></ul></ul>\n"
        . "<li>Registering to Orion</li>\n"
        . "<li>Monitoring transaction playback</li>\n"
        . "<li>AppStack integration</li>\n"
        . "<li>Alerting</li>\n"
        . "<ul><li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "<li>Severity</li></ul>\n"
        . "<li>Reporting</li>\n"
        . "<ul><li>Canned reports</li>\n"
        . "<li>Creating reports</li>\n"
        . "<li>Scheduling reports</li></ul>\n"
        . "</ul>"
        . "</ul>";
    }
?>