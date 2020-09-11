<?php 
global $NPMTrainDays;
if ($NPMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($NPMTrainDays, "NPM User Training") . "</h2>\n";
        $html .= "<h3>NPM Training Topics</h3>\n";
        $html .= "<ul><li>Orion platform architecture </li>\n";
        $html .= "<ul><li>Application server requirements</li>\n";
        $html .= "<li>SQL server requirements</li>\n";
        $html .= "<li>Core components overview</li>\n";
        $html .= "<li>Orion network sonar discovery</li>\n";
        $html .= "<li>Orion basic polling methods</li>\n";
        $html .= "<ul><li>ICMP</li>\n";
        $html .= "<li>SNMP</li>\n";
        $html .= "<li>WMI</li>\n";
        $html .= "<li>Optional Windows & Linux agents</li></ul></ul>\n";
        $html .= "<li>High Availability features</li>\n";
        $html .= "<li>User accounts</li>\n";
        $html .= "<li>Custom properties</li>\n";
        $html .= "<li>Orion groups</li>\n";
        $html .= "<li>Orion dependencies</li>\n";
        $html .= "<li>Building dashboards</li>\n";
        $html .= "<li>Integrated virtual infrastructure</li>\n";
        $html .= "<ul><li>IVIM</li></ul>\n";
        $html .= "<li>Netpath overview</li>\n";
        $html .= "<li>PerfStack overview</li>\n";
        $html .= "<li>Network Insight Overview</li>\n";
        $html .= "<ul><li>F5 BIG-IP</li>\n";
        $html .= "<li>Cisco ASA</li>\n";
        $html .= "<li>Cisco Nexus</li>\n";
        $html .= "<li>Palo Alto Firewalls</li></ul>\n";
        $html .= "<li>Wireless monitoring</li>\n";
        $html .= "<li>Cisco UCS API integration</li>\n";
        $html .= "<li>Cisco switch stack monitoring</li>\n";
        $html .= "<li>Universal device pollers</li>\n";
        $html .= "<li>NPM polling settings and data retention</li>\n";
        $html .= "<li>Mapping overview</li>\n";
        $html .= "<ul>\n";
        $html .= "<li>Worldwide Map</li>\n";
        $html .= "<li>Orion Mapping</li></ul>\n";
        $html .= "<li>Working with Syslog</li>\n";
        $html .= "<li>Working with SNMP Traps</li>\n";
        $html .= "<li>Alerting overview</li>\n";
        $html .= "<li>Reporting overview</li>\n";

        $html .= "</ul>";
    }
?>