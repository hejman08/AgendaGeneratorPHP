<?php 
global $VNQMDays;
if ($VNQMDays > 0)
    {
        $html .= "<h2>" . dayHeader($VNQMDays, "VNQM Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>VNQM Configuration Tasks</h3>\n";
        $html .= "<ul><li>Validation of VoIP infrastructure nodes</li>\n";
        $html .= "<ul><li>Import/Configuration of devices</li>\n";
        $html .= "<ul><li>Call Managers (Please see the following <a href='https://support.solarwinds.com/Success_Center/VoIP_Network_Quality_Manager_(VNQM)/VNQM_Getting_Started_Guide/030_Supported_devices_for_SolarWinds_VNQM_version_4.4'>link</a> for supported device information)</li>\n";
        $html .= "<li>Voice Gateways</li></ul>\n";
        $html .= "<li>SNMP & Credential verification</li></ul>\n";
        $html .= "<li>IPSLA Operation configuration (Please see the following <a href='https://support.solarwinds.com/Success_Center/VoIP_Network_Quality_Manager_(VNQM)/VNQM_Getting_Started_Guide/030_Supported_devices_for_SolarWinds_VNQM_version_4.4'>link</a> for supported device information)</li>\n";
        $html .= "<ul><li>Site to site testing</li>\n";
        $html .= "<li>Custom dashboard</li></ul>\n";
        $html .= "<li>Map integration</li>\n";
        $html .= "<ul><li>Addition of IPSLA Operation statistics to Orion maps</li></ul>\n";
        $html .= "<li>Advanced alert configuration</li>\n";
        $html .= "<ul><li>Noise reduction</li>\n";
        $html .= "<li>Notification</li>\n";
        $html .= "<li>Escalation</li>\n";
        $html .= "<li>Severity</li></ul>\n";
        $html .= "</ul>";
    }
?>