<?php 
global $IPAMTrainDays;
if ($IPAMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($IPAMTrainDays, "IPAM User Training") . "</h2>\n";
        $html .= "<h3>IPAM Training Topics</h3>\n";
        $html .= "<ul><li>Defining monitored subnets</li>\n";
        $html .= "<ul><li>Importing subnets</li>\n";
        $html .= "<li>Understanding IP status types</li>\n";
        $html .= "<li>Defining Static IP addresses</li>\n";
        $html .= "<li>Working with columns</li></ul>\n";
        $html .= "<li>Monitoring Microsoft Windows DHCP Servers</li>\n";
        $html .= "<ul><li>Defining Windows DHCP servers and credentials</li>\n";
        $html .= "<li>DHCP split-scope subnet utilization</li>\n";
        $html .= "<li>DHCP server management functions</li></ul>\n";
        $html .= "<li>Monitoring Microsoft DNS Servers</li>\n";
        $html .= "<ul><li>Detection of DNS record mismatches</li>\n";
        $html .= "<li>Creation of DNS PTS records</li></ul>\n";
        $html .= "<li>Historical Details</li>\n";
        $html .= "<li>Subnet Allocation Wizard</li>\n";
        $html .= "<li>Understanding IPAM Alerting</li>\n";
        $html .= "<li>Working with IPAM in reports</li>\n";

        $html .= "</ul>";
    }
?>