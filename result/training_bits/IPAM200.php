<?php 
global $IPAMTrainDays;
if ($IPAMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($IPAMTrainDays, "IPAM User Training") . "</h2>\n"
        . "<h3>IPAM Training Topics</h3>\n"
        . "<ul><li>Defining monitored subnets</li>\n"
        . "<ul><li>Importing subnets</li>\n"
        . "<li>Understanding IP status types</li>\n"
        . "<li>Defining Static IP addresses</li>\n"
        . "<li>Working with columns</li></ul>\n"
        . "<li>Monitoring Microsoft Windows DHCP Servers</li>\n"
        . "<ul><li>Defining Windows DHCP servers and credentials</li>\n"
        . "<li>DHCP split-scope subnet utilization</li>\n"
        . "<li>DHCP server management functions</li></ul>\n"
        . "<li>Monitoring Microsoft DNS Servers</li>\n"
        . "<ul><li>Detection of DNS record mismatches</li>\n"
        . "<li>Creation of DNS PTS records</li></ul>\n"
        . "<li>Historical Details</li>\n"
        . "<li>Subnet Allocation Wizard</li>\n"
        . "<li>Understanding IPAM Alerting</li>\n"
        . "<li>Working with IPAM in reports</li>\n"

        . "</ul>";
    }
?>