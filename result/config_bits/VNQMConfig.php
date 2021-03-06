<?php 
global $VNQMDays;
if ($VNQMDays > 0)
    {
        $html .= "<h2>" . dayHeader($VNQMDays, "VNQM Best Practices Configuration") . "</h2>\n"
        . "<h3>VNQM Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Validation of VoIP infrastructure nodes</li>\n"
        . "<ul>\n"
        . "<li>Import/Configuration of devices</li>\n"
        . "<ul>\n"
        . "<li>Call Managers (Please see the following <a href='"
        . "https://documentation.solarwinds.com/en/Success_Center/VNQM/Content/VNQM-GSG-Supported-Vendors.htm'>"
        . "link</a> for supported device information)</li>\n"
        . "<li>Voice Gateways</li>\n"
        . "</ul>\n"
        . "<li>SNMP &amp; Credential verification</li>\n"
        . "</ul>\n"
        . "<li>IPSLA Operation configuration (Please see the following&nbsp;<a href='"
        . "https://documentation.solarwinds.com/en/Success_Center/VNQM/Content/VNQM-GSG-Supported-Vendors.htm'>"
        . "link</a> for supported device information)</li>\n"
        . "<ul>\n"
        . "<li>SNMP &amp; Credential verification</li>\n"
        . "<ul>\n"
        . "<li>Read/Write Credentials for creating IPSLA operations if required</li>\n"
        . "<li>Read-only Credentials for manually created IPSLA operations</li>\n"
        . "</ul>\n"
        . "<li>Site to site testing example</li>\n"
        . "</ul>\n"
        . "<li>Advanced alert configuration</li>\n"
        . "<ul>\n"
        . "<li>Noise reduction</li>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "<li>Severity</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>VNQM Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Map integration</li>\n"
        . "<ul>\n"
        . "<li>Addition of IPSLA Operation statistics to Orion maps</li>\n"
        . "</ul>\n"
        . "</ul>\n";
        
    }
?>