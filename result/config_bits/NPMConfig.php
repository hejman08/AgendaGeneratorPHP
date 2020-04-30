<?php 
global $NPMDays;
if ($NPMDays > 0)
    {
        $html .= "<h2>" . dayHeader($NPMDays, "NPM Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>NPM Configuration Tasks</h3>\n";
        $html .= "<ul><li>Validation of credentials / community strings </li>";
        $html .= "<ul><li>Validation of network access</li></ul>";
        $html .= "<li>User account configuration</li>";
        $html .= "<li>Node discovery/ import</li>";
        $html .= "<ul><li>Node selection</li>";
        $html .= "<li>Interface selection</li>";
        $html .= "<li>Volume selection</li></ul>";
        $html .= "<li>Scheduled discovery configuration</li>";
        $html .= "<li>Hardware Health</li>";
        $html .= "<ul><li>Validation of polling on devices</li>";
        $html .= "<li>Sensor selection</li></ul>";
        $html .= "<li>Custom property strategy / configuration / assignment</li>";
        $html .= "<li>Group and dependency building</li>";
        $html .= "<ul><li><b class=\"impact\">Note: </b> - group and dependency creation can be an extremely time-consuming process. The Loop1 Systems engineer will create as many as time allows. If a specific quantity is agreed upon it will be indicated here*</li></ul>";
        $html .= "<li>Custom Poller creation – UnDP’s</li>";
        $html .= "<li>Node detail view customization</li>";
        $html .= "<ul><li>Network devices</li>";
        $html .= "<li>Server devices</li>";
        $html .= "<li>Environmental devices (UPS|APC|Air Handler|Etc)</li></ul>";
        $html .= "<li>Capacity planning functionality</li>";
        $html .= "<li>Wireless device monitoring features</li>";
        $html .= "<li>Custom map configuration overview</li>";
        $html .= "<ul><li>Global map view</li>";
        $html .= "<li>Network Atlas</li></ul>";
        $html .= "<li>Custom Dashboard configuration</li>";
        $html .= "<ul><li>NOC view</li>";
        $html .= "<li>Executive view</li></ul>";
        $html .= "<li>Core Dashboard cleanup</li>";
        $html .= "<ul><li>Unused / unnecessary resources</li>";
        $html .= "<li>Left tab utilization</li>";
        $html .= "<li>Optimization</li></ul>";
        $html .= "<li>Syslog Viewer</li>";
        $html .= "<ul><li>Rule configuration</li></ul>";
        $html .= "<li>SNMP Trap Viewer</li>";
        $html .= "<ul><li>Rule configuration</li></ul>";
        $html .= "<li>Reporting Overview</li>";
        $html .= "<ul><li>Report creation</li>";
        $html .= "<li>Automation scheduling</li></ul>";
        $html .= "<li>NetPath Services configuration overview</li>";
        $html .= "<li>PerfStack configuration overview</li>";
        $html .= "<li>Advanced alert creation/ configuration</li>";
        $html .= "<ul><li>Noise reduction</li>";
        $html .= "<li>Notification</li>";
        $html .= "<li>Escalation</li>";
        $html .= "<li>Severity</li></ul>";
        $html .= "<li>Alert NOC view overview</li>";
        $html .= "</ul>";
    }
?>