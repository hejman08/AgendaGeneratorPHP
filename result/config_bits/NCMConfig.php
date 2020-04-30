<?php 
global $NCMDays;
if ($NCMDays > 0)
    {
        $html .= "<h2>" . dayHeader($NCMDays, "NCM Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>NCM Configuration Tasks</h3>\n";
        $html .= "<ul><li>Connection profile creation</li>\n";
        $html .= "<li>Job configuration – backups, change reports, archive, maintenance, etc. </li>\n";
        $html .= "<li>Weekly Config Change report automation</li>\n";
        $html .= "<li>Device connectivity troubleshooting </li>\n";
        $html .= "<li>Policy report creation</li>\n";
        $html .= "<li>Real Time Change Detection configuration</li>\n";
        $html .= "<li>Config change template configuration</li>\n";
        $html .= "<li>Custom Device Templates</li>\n";
        $html .= "<li>Firmware Upgrade Operations</li>\n";
        $html .= "<li>Cisco Smart Advisor integration</li>\n";
        $html .= "<li>End of Support/Sale overview</li>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "<ul><li>Report creation</li>\n";
        $html .= "<li>Automation scheduling</li></ul>\n";
        $html .= "<li>Advanced alert creation</li>\n";
        $html .= "<ul><li>Notification</li>\n";
        $html .= "<li>Escalation</li></ul>\n";
        $html .= "</ul>";
    }
?>