<?php 
global $IPAMDays;
if ($IPAMDays > 0)
    {
        $html .= "<h2>" . dayHeader($IPAMDays, "IPAM Best Practices Configuration") . "</h2>\n"
        . "<h3>IPAM Configuration Tasks</h3>\n"
        . "<ul>"
        . "<li>Import/Discovery of subnets</li>\n"
        . "<li>Import of DHCP server(s)</li>\n"
        . "<ul><li>For ISC DHCP servers please see the following <a href='https://documentation.solarwinds.com/en/Success_Center/IPAM/Content/IPAM-ISC-DHCP.htm'>link</a></li></ul>\n"
        . "<li>Import of DNS server(s)</li>\n"
        . "<li>Configuration of automatic scans</li>\n"
        . "<li>Reporting</li>\n"
        . "<ul><li>Report creation</li>\n"
        . "<li>Automation scheduling</li></ul>\n"
        . "<li>Advanced alert creation</li>\n"
        . "<ul><li>Notification</li>\n"
        . "<li>Escalation</li></ul>\n"
        . "</ul>";
    }
?>