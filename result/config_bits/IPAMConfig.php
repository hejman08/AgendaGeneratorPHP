<?php 
global $IPAMDays;
if ($IPAMDays > 0)
    {
        $html .= "<h2>" . dayHeader($IPAMDays, "IPAM Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>IPAM Configuration Tasks</h3>\n";
        $html .= "<ul>";
        $html .= "<li>Import/Discovery of subnets</li>\n";
        $html .= "<li>Import of DHCP server(s)</li>\n";
        $html .= "<ul><li>For ISC DHCP servers please see the following <a href='https://documentation.solarwinds.com/en/Success_Center/IPAM/Content/IPAM-ISC-DHCP.htm'>link</a></li></ul>\n";
        $html .= "<li>Import of DNS server(s)</li>\n";
        $html .= "<li>Configuration of automatic scans</li>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "<ul><li>Report creation</li>\n";
        $html .= "<li>Automation scheduling</li></ul>\n";
        $html .= "<li>Advanced alert creation</li>\n";
        $html .= "<ul><li>Notification</li>\n";
        $html .= "<li>Escalation</li></ul>\n";
        $html .= "</ul>";
    }
?>