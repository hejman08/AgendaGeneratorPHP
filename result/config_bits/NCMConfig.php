<?php 
global $NCMDays;
if ($NCMDays > 0)
    {
        $html .= "<h2>" . dayHeader($NCMDays, "NCM Best Practices Configuration") . "</h2>\n"
        . "<h3>NCM Configuration Tasks</h3>\n"
        . "<ul><li>Connection profile creation</li>\n"
        . "<li>Job configuration – backups, change reports, archive, maintenance, etc. </li>\n"
        . "<li>Weekly Config Change report automation</li>\n"
        . "<li>Device connectivity troubleshooting </li>\n"
        . "<li>Policy report creation</li>\n"
        . "<li>Real Time Change Detection configuration</li>\n"
        . "<li>Config change template configuration</li>\n"
        . "<li>Custom Device Templates</li>\n"
        . "<li>Firmware Upgrade Operations</li>\n"
        . "<li>Cisco Smart Advisor integration</li>\n"
        . "<li>End of Support/Sale overview</li>\n"
        . "<li>Reporting</li>\n"
        . "<ul><li>Report creation</li>\n"
        . "<li>Automation scheduling</li></ul>\n"
        . "<li>Advanced alert creation</li>\n"
        . "<ul><li>Notification</li>\n"
        . "<li>Escalation</li></ul>\n"
        . "</ul>";
    }
?>