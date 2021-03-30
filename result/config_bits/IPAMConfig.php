<?php 
global $IPAMDays;
if ($IPAMDays > 0)
    {
        $html .= "<h2>" . dayHeader($IPAMDays, "IPAM Best Practices Configuration") . "</h2>\n"
        . "<h3>IPAM Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Import/Discovery of subnets</li>\n"
        . "<li>Import of DHCP server(s)</li>\n"
        . "<ul>\n"
        . "<li>For ISC DHCP servers please see the following <a href='https://documentation.solarwinds.com/en/Success_Center/IPAM/Content/IPAM-ISC-DHCP.htm'>link</a></li>\n"
        . "</ul>\n"
        . "<li>Import of DNS server(s)</li>\n"
        . "<li>Advanced alert creation</li>\n"
        . "<ul>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>IPAM Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Configuration of automatic scans</li>\n"
        . "<li>Reporting</li>\n"
        . "<ul>\n"
        . "<li>Report creation</li>\n"
        . "<li>Automation scheduling</li>\n"
        . "</ul>\n"
        . "</ul>\n";
        
    }
?>