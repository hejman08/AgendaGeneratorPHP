<?php 
global $NCMDays;
if ($NCMDays > 0)
    {
        $html .= "<h2>" . dayHeader($NCMDays, "NCM Best Practices Configuration") . "</h2>\n"
        . "<h3>NCM Standard Configuration Tasks</h3>"
        . "<ul>\n"
        . "<li>Connection profile creation</li>\n"
        . "<li>Job configuration &ndash; backups, change reports, archive, maintenance, etc.</li>\n"
        . "<li>Device connectivity troubleshooting</li>\n"
        . "<li>Advanced alert creation</li>\n"
        . "<ul>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>NCM Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Weekly Config Change report automation</li>\n"
        . "<li>End of Support/Sale</li>\n"
        . "<li>Policy Compliance Report creation</li>\n"
        . "<ul>\n"
        . "<li>Compliance Rule Creation</li>\n"
        . "<li>Compliance Policy Creation</li>\n"
        . "<li>Automatic Remediation</li>\n"
        . "</ul>\n"
        . "<li>Real Time Change Detection configuration</li>\n"
        . "<li>Config change template configuration</li>\n"
        . "<li>Custom Device Templates</li>\n"
        . "<li>Firmware Upgrade Operations</li>\n"
        . "<li>Cisco Smart Advisor integration</li>\n"
        . "<li>Reporting</li>\n"
        . "<ul>\n"
        . "<li>Report creation</li>\n"
        . "<li>Automation scheduling</li>\n"
        . "</ul>\n"
        . "</ul>";
    }
?>