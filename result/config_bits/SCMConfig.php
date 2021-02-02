<?php 
global $SCMDays;
if ($SCMDays > 0)
    {
        $html .= "<h2>" . dayHeader($SCMDays, "SCM Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>SCM Configuration Tasks</h3>\n";
        $html .= "<ul>";
        $html .= "<li>Adding nodes to SCM</li>\n";
        $html .= "<ul><li>Orion Agent deployment</li></ul>\n";
        $html .= "<li>Configuration profile Assignment</li>\n";
        $html .= "<ul><li>Out-of-the-box templates</li><ul>\n";
        $html .= "<li>IIS configuration</li>\n";
        $html .= "<li>HW inventory</li>\n";
        $html .= "<li>SW inventory</li></ul>\n";
        $html .= "<li>User-defined templates</li>\n";
        $html .= "<ul><li>File changes</li>\n";
        $html .= "<li>Registry changes</li></ul></ul>\n";
        $html .= "<li>Baseline Configuration Profile creation</li>\n";
        $html .= "<li>PerfStack integration</li>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "<ul><li>Report creation</li>\n";
        $html .= "<li>Automation scheduling</li></ul>\n";
        $html .= "<li>Advanced alert creation</li>\n";
        $html .= "<ul><li>Noise reduction</li>\n";
        $html .= "<li>Notification</li>\n";
        $html .= "<li>Escalation</li>\n";
        $html .= "<li>Severity</li></ul>\n";
        $html .= "</ul>";
    }
?>