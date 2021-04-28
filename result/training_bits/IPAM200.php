<?php 
global $IPAM200;
if ($IPAM200 > 0)
    {
        $html .= "<h2>" . dayHeader($IPAM200, "IPAM Admin Training") . "</h2>\n"
        . "<h3>IPAM Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>Understanding Orion IPAM Prerequisites and Installation</li>\n"
        . "<li>Using the Orion IPAM Web Console<br />\n"
        . "<ul>\n"
        . "<li>Defining Monitored Subnets</li>\n"
        . "<li>Monitoring Microsoft Windows &amp; Cisco DHCP Servers</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Understanding Orion IPAM Alerting</li>\n"
        . "<li>Working with Orion IPAM in NPM reports</li>\n"
        . "<li>Working with Orion IPAM in configuring IP Request Forms</li>\n"
        . "</ul>\n";
        
    }
?>