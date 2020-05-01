<?php 
global $APMDays;
if ($APMDays > 0)
    {
        $html .= "<h2>" . dayHeader($APMDays, "APM Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>APM Configuaration Tasks</h3>\n";
        $html .= "<ul><li>Deployment of Host agents</li>\n";
        $html .= "<ul><li>Host Agent Plugins</li>\n";
        $html .= "<ul><li>Apache</li>\n";
        $html .= "<li>IIS</li>\n";
        $html .= "<li>Docker</li>\n";
        $html .= "<li>SQL/MySQL/MongoDB</li>\n";
        $html .= "<li>NGINX</li></ul></ul>\n";
        $html .= "<li>Service Integrations</li>\n";
        $html .= "<ul><li>SolarWinds Papertrail / Loggly</li>\n";
        $html .= "<li>AWS CloudWatch</li>\n";
        $html .= "<ul><li>Custom CloudWatch metrics</li></ul>\n";
        $html .= "<li>APM Service Deployment</li>\n";
        $html .= "<ul><li>.Net</li>\n";
        $html .= "<li>GoLang</li>\n";
        $html .= "<li>Java</li>\n";
        $html .= "<li>Node.js</li>\n";
        $html .= "<li>Python</li>\n";
        $html .= "<li>Ruby</li>\n";
        $html .= "<li>PHP</li></ul></ul>\n";
        $html .= "<li>Custom Dashboard configuration</li>\n";
        $html .= "<li>Reporting Overview</li>\n";
        $html .= "<ul><li>Report creation</li>\n";
        $html .= "<li>Automation scheduling</li></ul>\n";
        $html .= "<li>Advanced alert creation/configuration</li>\n";
        $html .= "<ul><li>Noise reduction</li>\n";
        $html .= "<li>Notification</li>\n";
        $html .= "<li>Escalation</li>\n";
        $html .= "<li>Severity</li></ul>\n";

        $html .= "</ul>";
    }
?>