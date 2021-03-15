<?php 
global $SCMDays;
if ($SCMDays > 0)
    {
        $html .= "<h2>" . dayHeader($SCMDays, "SCM Best Practices Configuration") . "</h2>\n"
        . "<h3>SCM Configuration Tasks</h3>\n"
        . "<ul>"
        . "<li>Adding nodes to SCM</li>\n"
        . "<ul><li>Orion Agent deployment</li></ul>\n"
        . "<li>Configuration profile Assignment</li>\n"
        . "<ul><li>Out-of-the-box templates</li><ul>\n"
        . "<li>IIS configuration</li>\n"
        . "<li>HW inventory</li>\n"
        . "<li>SW inventory</li></ul>\n"
        . "<li>User-defined templates</li>\n"
        . "<ul><li>File changes</li>\n"
        . "<li>Registry changes</li></ul></ul>\n"
        . "<li>Baseline Configuration Profile creation</li>\n"
        . "<li>PerfStack integration</li>\n"
        . "<li>Reporting</li>\n"
        . "<ul><li>Report creation</li>\n"
        . "<li>Automation scheduling</li></ul>\n"
        . "<li>Advanced alert creation</li>\n"
        . "<ul><li>Noise reduction</li>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "<li>Severity</li></ul>\n"
        . "</ul>";
    }
?>