<?php 
global $APMDays;
if ($APMDays > 0)
    {
        $html .=  "<h2>" . dayHeader($APMDays, "APM Best Practices Configuration") . "</h2>\n"
        .  "<h3>APM Configuration Tasks</h3>\n"
        .  "<ul><li>Deployment of Host agents</li>\n"
        .  "<ul><li>Host Agent Plugins</li>\n"
        .  "<ul><li>Apache</li>\n"
        .  "<li>IIS</li>\n"
        .  "<li>Docker</li>\n"
        .  "<li>SQL/MySQL/MongoDB</li>\n"
        .  "<li>NGINX</li></ul></ul>\n"
        .  "<li>Service Integrations</li>\n"
        .  "<ul><li>SolarWinds Papertrail / Loggly</li>\n"
        .  "<li>AWS CloudWatch</li>\n"
        .  "<ul><li>Custom CloudWatch metrics</li></ul>\n"
        .  "<li>APM Service Deployment</li>\n"
        .  "<ul><li>.Net</li>\n"
        .  "<li>GoLang</li>\n"
        .  "<li>Java</li>\n"
        .  "<li>Node.js</li>\n"
        .  "<li>Python</li>\n"
        .  "<li>Ruby</li>\n"
        .  "<li>PHP</li></ul></ul>\n"
        .  "<li>Custom Dashboard configuration</li>\n"
        .  "<li>Alert configuration</li>\n"
        
        .  "</ul>";
    }
?>