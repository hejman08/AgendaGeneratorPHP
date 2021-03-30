<?php 
global $SCMDays;
if ($SCMDays > 0)
    {
        $html .= "<h2>" . dayHeader($SCMDays, "SCM Best Practices Configuration") . "</h2>\n"
        . "<h3>SCM Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Add nodes to SCM</li>\n"
        . "<ul>\n"
        . "<li>Orion Agent deployment</li>\n"
        . "</ul>\n"
        . "<li>Configuration profile Assignment</li>\n"
        . "<ul>\n"
        . "<li>Out-of-the-box templates</li>\n"
        . "<ul>\n"
        . "<li>IIS configuration</li>\n"
        . "<li>HW inventory</li>\n"
        . "<li>SW inventory</li>\n"
        . "<li>File changes</li>\n"
        . "<li>Registry changes</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<li>Baseline Configuration Profile creation</li>\n"
        . "<li>Advanced alert creation</li>\n"
        . "<ul>\n"
        . "<li>Noise reduction</li>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "<li>Severity</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>SCM Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>PerfStack configuration</li>\n"
        . "<li>Reporting</li>\n"
        . "<ul>\n"
        . "<li>Report creation</li>\n"
        . "<li>Automation scheduling</li>\n"
        . "</ul>\n"
        . "</ul>\n";
        
    }
?>