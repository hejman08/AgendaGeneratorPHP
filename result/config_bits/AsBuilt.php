<?php 
global $html, $AsBuiltDays, $hasSAM, $hasNCM, $hasVNQM, $hasNTA, $hasIPAM, $hasUDT, $hasSRM, $hasVMAN, $hasSEM, $hasPM, $hasHA, $isOrionEng;
if ($AsBuiltDays > 0)
    {
        $html .= "<h2>" . dayHeader($AsBuiltDays, "As-Built Documentation Preparation") . "</h2>\n"
        . "<h3>As-Built Documentation Items</h3>\n"
        . "<ul><li>SolarWinds products that make up the solution</li>\n"
        . "<ul><li>High level design diagram</li></ul>\n"
        . "<li>User accounts created and permissions granted</li>\n"
        . "<li>What devices are being monitored </li>\n"
        . "<li>Methods used for monitoring (Agent, WMI, SNMP, etc.) by device type</li>\n"
        . "<li>What services are monitored by what modules/products</li>\n"
        . "<li>Thresholds & retention settings</li>\n"
        . "<li>Alerting and notifications configured in the environment</li>\n";
            if ($hasSAM == true)
            {
                $html .= "<li><b class='impact'>SAM</b> - application templates in use</li>\n";
            }
            if ($hasNCM == true)
            {
                $html .= "<li><b class='impact'>NCM</b> - jobs enabled</li>\n";
            }
            if ($hasVNQM == true)
            {
                $html .= "<li><b class='impact'>VNQM</b> - IPSLA Operations configured</li>\n";
            }
            if ($hasNTA == true)
            {
                $html .= "<li><b class='impact'>NTA</b> - custom applications configured</li>\n"
                . "<li><b class='impact'>NTA</b> - IP Address groups configured</li>\n";
            }
            if ($hasIPAM == true)
            {
                $html .= "<li><b class='impact'>IPAM</b> – subnets, scopes, DNS servers, DHCP servers, configured scans</li>\n";
            }
            if ($hasUDT == true)
            {
                $html .= "<li><b class='impact'>UDT</b> – devices in scope, watch list items, white list items</li>\n";
            }
            if ($hasSRM == true)
            {
                $html .= "<li><b class='impact'>SRM </b>– storage arrays monitored</li>\n";
            }
            if ($hasVMAN == true)
            {
                $html .= "<li><b class='impact'>VMAN </b>– monitored clusters/hosts</li>\n";
            }
            if ($hasSEM == true)
            {
                $html .= "<li><b class='impact'>SEM </b>– rules configured</li>\n";
            }
            if ($hasPM == true)
            {
                $html .= "<li><b class='impact'>PM</b> – patching schedules configured</li>\n"
            . "<li><b class='impact'>PM</b> – patching groups configured</li>\n";
            }
        $html .= "<li>Dashboards configured</li>\n"
        . "<ul><li>Dashboards that have been configured in the environment</li></ul>\n"
        . "<li>Backup and Recovery options that have been configured</li>\n"
        . "<ul><li>MS SQL backups</li></ul>\n"
        . "<li>Security</li>\n"
        . "<ul><li>Users created for SolarWinds environment</li>\n"
        . "<ul><li>Permissions granted to user accounts</li></ul>\n"
        . "<li>Users created for Core Application MS SQL database</li></ul>\n"
        . "<li>Scalability</li>\n"
        . "<ul><li>Scalability limitations of current environment</li>\n"
        . "<li>Future scalability options for current environment</li></ul>\n";
            if ($hasHA == true)
            {
                $html .= "<li>HA configuration information</li>\n"
                . "<ul><li>IP scheme</li>\n"
                . "<li>Server role assignments</li></ul>\n";
            }
            if ($isOrionEng == true)
            {
                $html .= "<li>Core Application MS SQL database configuration information</li>\n"
                . "<ul><li>Key database settings in place</li>\n"
                . "<li>Maintenance plans that have been configured/enabled</li>\n"
                . "<li>Recommendations for future “care and feeding” of the database</li></ul>\n";
            }
        $html .= "<li>Follow-up recommendations</li>\n"
        . "<ul><li>Additional tasks to be completed by client</li>\n"
        . "<li>Further customizations that may be beneficial to the client</li></ul>\n"
        . "</ul>";
    }
?>