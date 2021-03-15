<?php 
global $VNQMDays;
if ($VNQMDays > 0)
    {
        $html .= "<h2>" . dayHeader($VNQMDays, "VNQM Best Practices Configuration") . "</h2>\n"
        . "<h3>VNQM Configuration Tasks</h3>\n"
        . "<ul><li>Validation of VoIP infrastructure nodes</li>\n"
        . "<ul><li>Import/Configuration of devices</li>\n"
        . "<ul><li>Call Managers (Please see the following "
        . "<a href='https://support.solarwinds.com/Success_Center/VoIP_Network_Quality_Manager_(VNQM)/VNQM_Getting_Started_Guide/030_Supported_devices_for_SolarWinds_VNQM_version_4.4'>"
        . "link</a> for supported device information)</li>\n"
        . "<li>Voice Gateways</li></ul>\n"
        . "<li>SNMP & Credential verification</li></ul>\n"
        . "<li>IPSLA Operation configuration (Please see the following "
        . "<a href='https://support.solarwinds.com/Success_Center/VoIP_Network_Quality_Manager_(VNQM)/VNQM_Getting_Started_Guide/030_Supported_devices_for_SolarWinds_VNQM_version_4.4'>"
        . "link</a> for supported device information)</li>\n"
        . "<ul><li>Site to site testing</li>\n"
        . "<li>Custom dashboard</li></ul>\n"
        . "<li>Map integration</li>\n"
        . "<ul><li>Addition of IPSLA Operation statistics to Orion maps</li></ul>\n"
        . "<li>Advanced alert configuration</li>\n"
        . "<ul><li>Noise reduction</li>\n"
        . "<li>Notification</li>\n"
        . "<li>Escalation</li>\n"
        . "<li>Severity</li></ul>\n"
        . "</ul>";
    }
?>