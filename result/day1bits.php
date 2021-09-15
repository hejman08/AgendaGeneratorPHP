<?php
function day1Bits() {
    global $html;
    global $modules;
    global $HCAssessmentDays;
    global $HCReviewDays;
    global $HCRemediationDays;
    global $servers;
    global $hasNetworkModules;
    global $modulesToBeInstalled, $modulesInstalled;
    global $Day1Bits;
    global $EngagementType;
    global $DBMigration;
    global $hasNTA, $hasVNQM, $hasSRM, $hasVMAN, $hasSAM, $hasWPM, $hasDPA, $hasAPM, $hasPMAN, $hasSEM, $isOrionEng;
    global $hasKiwi, $hasMA, $hasNPM, $hasNCM, $hasIPAM, $hasUDT;
    $servers = listServers();
    $html .= "<h1>Engagement Objectives</h1>\n";

    //. listServers()
    if ($HCAssessmentDays > 0) {
        $html .= "<h2>" . dayHeader($HCAssessmentDays, "Health Check Assessment") . "</h2>\n"
        . "<h3>Validation of Server Platforms</h3>\n"
        . $servers
        . "<h3>Performance Evaluation</h3>\n"
        . $servers
        . "<h3>Best Practices Evaluation</h3>\n"
        . $modules
        ."<h3>Orion Security Assessment</h3>"
        . "<ul>\n<li>SolarWinds Orion Software Configuration</li>\n"
        . "<li>Microsoft SQL Configuration</li>\n"
        . "<li>SolarWinds Server/Platform Configuration</li>\n"
        . "<li>Network Assessment (requires NCM)</li>\n</ul>\n"
        . "<h3>Recommendations</h3>\n"
        . "<ul>\n<li>Future Considerations</li>\n<ul>"
        . "<li>Scalability Limits</li>\n"
        . "<li>License vs. Product</li>\n"
        . "<li>Design architecture</li>\n"
        . "<li>Current and future needs</li>\n"
        . "<li>HA/DR solutions</li>\n"
        . "<ul>\n<li>WAN vs. LAN</li>\n"
        . "<li>MS SQL options</li>\n"
        . "<li>Active/Active options</li>\n</ul>\n"
        . "<li>Product offering limitations</li>\n"
        . "<li>Test/Lab SolarWinds environment recommendations</li>\n"
        . "<li>3rd party alerting options</li>\n"
        . "<ul>\n<li>NotePager Pro</li>\n"
        . "<li>PagerDuty</li>\n"
        . "<li>OpsGenie</li>\n</ul>\n"
        . "<li>Monitoring Tools Consolidation</li>\n"
        . "<ul>\n<li>Identify functionality overlaps to eliminate duplication of effort and cut costs</li>\n</ul>\n</ul>\n"
        . "<li>Immediate critical remediation tasks to be addressed</li>\n"
        . "<ul>\n<li>Best Practices</li>\n"
        . "<li>Performance issues</li>\n</ul>\n"
        . "<li>Monitoring Gaps</li>\n"
        . "<ul>\n<li>Unused features of currently owned modules</li>\n"
        . "<li>Additional SolarWinds modules that may benefit client</li>\n</ul>\n</ul>\n"
        . "<h3>Health Check Documentation Creation (Loop1 engineer will go offline to produce required documentation)</h3>\n"
        . "<ul>\n<li>Health Assessment details & recommendations</li>\n</ul>\n";
    }
    if ($HCReviewDays > 0)
    {
        $html .= "<h2>". dayHeader($HCReviewDays, "Health Check Document Review & Task Review Session") . "</h2>\n"
        . "<h3>Health Check Documentation Review</h3>\n"
        . "<ul>\n<li>Health Check Documentation review</li>\n"
        . "<ul>\n<li>Performance</li>\n"
        . "<li>Best practices</li>\n"
        . "<li>Recommendations</li>\n</ul>\n</ul>"
        . "<h3>Task Review Session</h3>\n"
        . "<ul>\n<li>Monitoring goals</li>\n<ul>\n";
        if ($hasNetworkModules == true)
        {
            $html .= "<li>Network infrastructure</li>\n";
        }
        if ($hasNTA == true)
        {
            $html .= "<li>NetFlow collection strategy</li>\n";
        }
        if ($hasVNQM == true)
        {
            $html .= "<li>VoIP infrastructure</li>\n";
        }
        if ($hasSRM == true)
        {
            $html .= "<li>Storage infrastructure</li>\n";
        }
        if ($hasVMAN == true)
        {
            $html .= "<li>Virtualization infrastructure</li>\n";
        }
        if ($hasSAM == true)
        {
            $html .= "<li>Server infrastructure</li>\n"
            . "<li>Critical Applications</li>\n";
        }
        if ($hasWPM == true)
        {
            $html .= "<li>Critical websites (WPM)</li>\n";
        }
        if ($hasDPA == true)
        {
            $html .= "<li>Critical Databases (DPA)</li>\n";
        }
        if ($hasAPM == true)
        {
            $html .= "<li>Hosted Application Components (APM)</li>\n";
        }
        if ($hasPMAN == true)
        {
            $html .= "<li>Patching Strategy</li>\n"
            . "<ul>\n<li>Microsoft</li>\n"
            . "<li>3rd party applications</li>\n</ul>\n";
        }
        if ($hasSEM == true)
        {
            $html .= "<li>Supported data sources to monitor (SEM)</li>\n"
            . "<ul>\n<li><a href=\"http://www.solarwinds.com/log-event-manager/data-sources\">SEM Supported Data Sources</a></li>\n</ul>\n"
            . "<li>Security requirements (SEM)</li>\n"
            . "<ul>\n<li>Industry compliance - HIPAA, PCI, SOX, etc.</li>\n"
            . "<li>Internal policies</li>\n</ul>\n";
        }
        $html .= "<li>SolarWinds deployment redesign (if determined to be a requirement/recommendation)</li>\n</ul>\n";
        if ($isOrionEng == true)
        {
            $html .= "<li>Custom Property strategy</li>\n";
        }
        $html .= "<ul>\n<li>SLA's</li>\n"
        . "<li>Warning/Critical thresholds</li>\n</ul>\n"
        . "<li>Alert strategy</li>\n"
        . "<ul>\n<li>Notification</li>\n"
        . "<li>Escalation protocol</li>\n</ul>\n"
        . "<li>User access control</li>\n"
        . "<li>Reporting requirements</li>\n"
        . "<li>Dashboard requirements</li>\n";
        
        if ($isOrionEng == true)
        {
            $html .= "<li>Mapping requirements</li>\n";
        }
        $html .= "</ul>\n";
    }
    if ($HCRemediationDays > 0)
    {
        $html .= "<h2>" . dayHeader($HCRemediationDays, "Environment Remediation") . "</h2>\n"
        . "<p>This time has been set aside for the Loop1 Engineer to work with the client to remediate their SolarWinds environment on an as-time-allows basis. "
        . "The expectation is that the time will be used to remediate critical items identified as part of the health check, in addition to any pain points or concerns the "
        . "client may wish to have addressed. Items to be addressed include, but are not limited to alerts, reporting, views, account management, Polling Engine balancing, "
        . "cleanup of excess or unknown elements, and any other SolarWinds-related tasks the client and Engineer may agree upon.</p>\n";
    }
    switch ($EngagementType)
                    {
                        case "HC":
                            //Nothing to do here, HC stuff covered at beginning.
                            break;

                        case "Rebuild":
                            $html .= "<h2>" . dayHeader($Day1Bits, "Platform Validation | Task Review | SolarWinds Software Install") . "</h2>\n"
                            . "<h3>Validation & Configuration of server platforms</h3>\n"
                            . $servers //add in the "Validation & configuration..." bits from before
                            . "\n<h3>Task Review Session</h3>\n"
                            . "<ul>\n<li>Monitoring goals</li>\n<ul>\n";
                            if ($hasNetworkModules == true)
                            {
                                $html .= "<li>Network infrastructure</li>\n";
                            }
                            if ($hasNTA == true)
                            {
                                $html .= "<li>NetFlow collection strategy</li>\n";
                            }
                            if ($hasVNQM == true)
                            {
                                $html .= "<li>VoIP infrastructure</li>\n";
                            }
                            if ($hasSRM == true)
                            {
                                $html .= "<li>Storage infrastructure</li>\n";
                            }
                            if ($hasVMAN == true)
                            {
                                $html .= "<li>Virtualization infrastructure</li>\n";
                            }
                            if ($hasSAM == true)
                            {
                                $html .= "<li>Server infrastructure</li>\n"
                                . "<li>Critical Applications</li>\n";
                            }
                            if ($hasWPM == true)
                            {
                                $html .= "<li>Critical websites (WPM)</li>\n";
                            }
                            if ($hasDPA == true)
                            {
                                $html .= "<li>Critical Databases (DPA)</li>\n";
                            }
                            if ($hasPMAN == true)
                            {
                                $html .= "<li>Patching Strategy</li>\n"
                                . "<ul>\n<li>Microsoft</li>\n"
                                . "<li>3rd party applications</li>\n</ul>\n";
                            }
                            if ($hasSEM == true)
                            {
                                $html .= "<li>Supported data sources to monitor (SEM)</li>\n"
                                . "<ul>\n<li><a href=\"https://documentation.solarwinds.com/en/Success_Center/SEM/Content/Connectors/sem-connectors.htm\">SEM Supported Data Sources</a></li>\n</ul>\n"
                                . "<li>Security requirements (SEM)</li>\n"
                                . "<ul>\n<li>Industry compliance - HIPAA, PCI, SOX, etc.</li>\n"
                                . "<li>Internal policies</li>\n</ul>\n";
                            }
                            if ($hasKiwi == true)
                            {
                                $html .= "<li>Syslog strategy (Kiwi)</li>\n";
                            }
                            if ($hasMA == true)
                            {
                                $html .= "<li>Applications to integrate (MA)</li>\n";
                            }
                            $html .= "</ul>\n</li>\n<li>Identification of elements from existing environment to be preserved (at the client's discretion)</li>\n<ul>\n";
                            if ($hasNPM == true)
                            {
                                $html .= "<li>NPM</li>\n"
                                . "<ul>\n<li>Devices</li>\n"
                                . "<li>Credentials</li>\n"
                                . "<li>IP's</li>\n"
                                . "<li>Interfaces</li>\n"
                                . "<li>Volumes</li>\n"
                                . "<li>UnDP's</li>\n"
                                . "<li>Custom Properties</li>\n"
                                . "<li>Custom maps</li>\n"
                                . "<li>Groups</li>\n"
                                . "<li>Dependencies</li>\n"
                                . "<li>Alerts</li>\n"
                                . "<li>Reports</li>\n</ul>\n";
                            }
                            if ($hasNTA == true)
                            {
                                $html .= "<li>NTA</li>\n"
                                . "<ul>\n<li>Custom IP Address Groups</li>\n"
                                . "<li>Custom Applications</li>\n</ul>\n";
                            }
                            if ($hasNCM == true)
                            {
                                $html .= "<li>NCM</li>\n"
                                . "<ul>\n<li>Configured jobs</li>\n"
                                . "<li>Configured rules, policies, and reports</li>\n"
                                . "<li>Custom change templates</li>\n"
                                . "<li>Custom scripts</li>\n"
                                . "<li>Archived device configs</li>\n"
                                . "<li>Custom device templates</li>\n</ul>\n";
                            }
                            if ($hasSAM == true)
                            {
                                $html .= "<li>SAM</li>\n"
                                . "<ul>\n<li>Assigned Templates</li>\n"
                                . "<li>Application Custom Properties</li>\n"
                                . "<li>Custom Application Templates/Monitors</li>\n"
                                . "<li>Application Groups</li>\n</ul>\n";
                            }
                            if ($hasIPAM == true)
                            {
                                $html .= "<li>IPAM</li>\n"
                                . "<ul>\n<li>Configured subnet scans</li>\n"
                                . "<li>Custom fields</li>\n</ul>\n";
                            }
                            if ($hasUDT == true)
                            {
                                $html .= "<li>UDT</li>\n"
                                . "<ul>\n<li>Watch list</li>\n"
                                . "<li>White list</li>\n</ul>\n";
                            }
                            if ($hasWPM == true)
                            {
                                $html .= "<li>WPM</li>\n"
                                . "<ul>\n<li>Configured transactions</li>\n</ul>\n";
                            }

                            if ($hasVNQM == true)
                            {
                                $html .= "<li>VNQM</li>\n"
                                . "<ul>\n<li>Configured IP SLA operations</li>\n"
                                . "<li>Monitored VoIP Nodes</li>\n</ul>\n";
                            }
                            if ($hasSRM == true)
                            {
                                $html .= "<li>SRM</li>\n"
                                . "<ul>\n<li>Monitored storage arrays</li>\n</ul>\n";
                            }
                            if ($hasDPA == true)
                            {
                                $html .= "<li>DPA</li>\n"
                                . "<ul>\n<li>Monitored database instances</li>\n"
                                . "<li>Reports</li>\n"
                                . "<li>Custom Alerts</li>\n</ul>\n";
                            }
                            if ($hasSEM == true)
                            {
                                $html .= "<li>SEM</li>\n"
                                . "<ul>\n<li>Enabled rules</li>\n"
                                . "<li>Custom reports</li>\n"
                                . "<li>Connector Profiles</li>\n</ul>\n";
                            }
                            $html .= "</ul>\n";
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Custom Property Strategy</li>\n"
                                . "<ul>\n<li>SLA's</li>\n"
                                . "<li>Thresholds</li>\n"
                                . "<li>Etc.</li>\n</ul>\n";
                            }

                            $html .= "<li>Alert Strategy</li>\n"
                            . "<ul>\n<li>Notification</li>\n"
                            . "<li>Escalation Protocol</li>\n</ul>\n"
                            . "<li>User Access control</li>\n"
                            . "<li>Reporting requirements</li>\n";
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Dashboard requirements</li>\n"
                                . "<li>Mapping requirements</li>\n";
                            }
                            $html .= "</ul>";
                            if ($modulesToBeInstalled != "<ul></ul>"){
                            $html .= "<h3>Installation Tasks</h3>\n"
                            . "<ul>\n<li>Software Installs</li>\n"
                            . $modulesToBeInstalled
                            . "</ul>\n"; //end of software install
                            }

                            break;
                        case "NewBuild":
                            $html .= "<h2>" . dayHeader($Day1Bits, "Platform Validation | Task Review | SolarWinds Software Install") . "</h2>\n"
                            . "<h3>Validation & Configuration of server platforms</h3>\n"
                            . $servers //add in the "Validation & configuration..." bits from before
                            . "\n<h3>Task Review Session</h3>\n"
                            . "<ul>\n<li>Monitoring goals</li>\n<ul>\n";
                            if ($hasNetworkModules == true)
                            {
                                $html .= "<li>Network infrastructure</li>\n";
                            }
                            if ($hasNTA == true)
                            {
                                $html .= "<li>NetFlow collection strategy</li>\n";
                            }
                            if ($hasVNQM == true)
                            {
                                $html .= "<li>VoIP infrastructure</li>\n";
                            }
                            if ($hasSRM == true)
                            {
                                $html .= "<li>Storage infrastructure</li>\n";
                            }
                            if ($hasVMAN == true)
                            {
                                $html .= "<li>Virtualization infrastructure</li>\n";
                            }
                            if ($hasSAM == true)
                            {
                                $html .= "<li>Server infrastructure</li>\n"
                                . "<li>Critical Applications</li>\n";
                            }
                            if ($hasWPM == true)
                            {
                                $html .= "<li>Critical websites (WPM)</li>\n";
                            }
                            if ($hasDPA == true)
                            {
                                $html .= "<li>Critical Databases (DPA)</li>\n";
                            }
                            if ($hasPMAN == true)
                            {
                                $html .= "<li>Patching Strategy</li>\n"
                                . "<ul>\n<li>Microsoft</li>\n"
                                . "<li>3rd party applications</li>\n</ul>\n";
                            }
                            if ($hasSEM == true)
                            {
                                $html .= "<li>Supported data sources to monitor (SEM)</li>\n"
                                . "<ul>\n<li><a href=\"https://documentation.solarwinds.com/en/Success_Center/SEM/Content/Connectors/sem-connectors.htm\">SEM Supported Data Sources</a></li>\n</ul>\n"
                                . "<li>Security requirements (SEM)</li>\n"
                                . "<ul>\n<li>Industry compliance - HIPAA, PCI, SOX, etc.</li>\n"
                                . "<li>Internal policies</li>\n</ul>\n";
                            }
                            if ($hasKiwi == true)
                            {
                                $html .= "<li>Syslog strategy (Kiwi)</li>\n";
                            }
                            if ($hasMA == true)
                            {
                                $html .= "<li>Applications to integrate (MA)</li>\n";
                            }
                            $html .= "</ul>\n";
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Custom Property Strategy</li>\n"
                                . "<ul>\n<li>SLA's</li>\n"
                                . "<li>Thresholds</li>\n"
                                . "<li>Etc.</li>\n</ul>\n";
                            }

                            $html .= "<li>Alert Strategy</li>\n"
                            . "<ul>\n<li>Notification</li>\n"
                            . "<li>Escalation Protocol</li>\n</ul>\n"
                            . "<li>User Access control</li>\n"
                            . "<li>Reporting requirements</li>\n";
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Dashboard requirements</li>\n"
                                . "<li>Mapping requirements</li>\n";
                            }
                            $html .= "</ul>";
                            if ($modulesToBeInstalled != "<ul></ul>"){
                                $html .= "<h3>Installation Tasks</h3>\n"
                                . "<ul>\n<li>Software Installs</li>\n"
                                . $modulesToBeInstalled
                                . "</ul>\n"; //end of software install
                                }

                            break;

                        case "ExistingRemediation":
                            $html .= "<h2>" . dayHeader($Day1Bits, "Environment Assessment | Recommendations | Task Review | Remediation") . "</h2>\n"
                            . "<h3>Validation of server platforms</h3>\n"
                            . $servers //add in the "Validation & configuration..." bits from before
                            . "<h3>Performance Evaluation</h3>\n"
                            . $servers //add in the "Validation & configuration..." bits from before
                            . "<h3>Best Practices Evaluation</h3>\n"
                            . $modules;
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Core Application MS SQL</li>\n";
                            }
                            $html .= "\n</ul>\n"
                            . "<h3>Recommendations</h3>\n<ul>\n"
                            . "<li>Future considerations</li>\n<ul>\n"
                            . "<li>Scalability limits</li>\n<ul>\n"
                            . "<li>License vs. product</li>\n</ul>\n"
                            . "<li>Design architecture</li>\n<ul>\n"
                            . "<li>Current and future needs</li>\n</ul>\n"
                            . "<li>HA/DR Solutions</li>\n<ul>\n"
                            . "<li>WAN vs. LAN</li>\n"
                            . "<li>MS SQL options</li>\n"
                            . "<li>Active/Active options</li>\n"
                            . "<li>Product offering limitations</li>\n</ul>\n"
                            . "<li>Test/Lab SolarWinds environment recomendations</li>\n"
                            . "<li>3rd Party alerting options</li>\n<ul>\n"
                            . "<li>NotePager Pro</li>\n"
                            . "<li>PagerDuty</li>\n"
                            . "<li>OpsGenie</li>\n</ul>\n</ul>\n"
                            . "<li>Monitoring tools consolidation</li>\n<ul>\n"
                            . "<li>Identify functionality overlaps to eliminate duplication of effort and cut costs</li>\n</ul>\n"
                            . "<li>Immediate critical remediation tasks to be addressed</li>\n<ul>\n"
                            . "<li>Best practices</li>\n"
                            . "<li>Performance issues</li>\n</ul>\n"
                            . "<li>Monitoring gaps</li>\n<ul>\n"
                            . "<li>Unused features of currently owned modules</li>\n"
                            . "<li>Additional SolarWinds products that may benefit client</li>\n</ul>\n</ul>\n";

                            break;
                        case "ExistingAddingModules":
                            break;
                        case "Training":
                            break;
                        case "WHDHosted":
                            break;
                        case "OSUpgrades":
                            break;
                        case "MSE":
                            break;
                        case "EngineMigration":
                        case "DBMigration":
                            $html .= "<p><b class=\"impact\">Please note:</b> Typically, an upgrade and migration will take less than one day. If the "
                            . "upgrades go as planned with no issues, there should be left over time.  This time should be used as seen fit by the client and the "
                            . "Loop1 engineer. Example tasks include alerts, reporting, views, account management, Polling Engine balancing, cleanup of excess or "
                            . "unknown elements, and any other SolarWinds - related tasks the client and Engineer may agree upon. Extra time is allocated to account for"
                            . " unforeseen software issues during the upgrade process.</p>"
                            . "<h2>" . dayHeader($Day1Bits, "Platform Validation | Migration | Software Upgrades") . "</h2>\n"
                            . "<h3>Validation of server platforms</h3>\n"
                            . $servers //add in the "Validation & configuration..." bits from before
                            . "<h3>Migration Informational Links</h3>\n"
                            . "<p>For migrations where the new application server(s) will have a new IP and/or hostname, see "
                            . "<a href='https://documentation.solarwinds.com/en/Success_Center/orionplatform/Content/Migrate_SolarWinds_to_a_new_server_with_a_new_IP_and_hostname.htm'>"
                            . "this link</a></p>"
                            . "<p>For migrations where the new application server(s) will reuse the same IP and hostname, see "
                            . "<a href='https://documentation.solarwinds.com/en/success_center/orionplatform/Content/Migrate_SolarWinds_to_a_new_server_using_the_same_IP_and_hostname.htm'>"
                            . "this link</a></p>";
                            if ($DBMigration == true)
                            {
                                $html .= "<p>For more information regarding the migration of the SolarWinds database(s), see "
                                . "<a href='https://documentation.solarwinds.com/en/success_center/orionplatform/Content/Migrate_the_SolarWinds_Orion_SQL_database_to_a_new_server.htm'>"
                                . "this link</a></p>";
                            }
                            $html .= "<h3>SolarWinds Migration Tasks</h3>\n<ul>\n"
                            . "<li>Stop SolarWinds services</li>\n"
                            . "<li>Backup of the SolarWinds MS SQL database</li>\n";
                            if ($DBMigration == true)
                            {
                                $html .= "<li>Restore of the SolarWinds MS SQL database on new MS SQL instance</li>\n";
                            }
                            $html .= "<li>Migration of the Core Applications to new server(s)</li>\n"
                            . "<li>Deactivation of licenses from old server(s)</li>\n"
                            . "<li>Installation of software on new server(s)(must be same versions as current environment)</li>\n"
                            . $modules
                            . "<li>Activation of licenses on new server(s)</li></ul>"
                            . "<h3>SolarWinds Software Upgrades</h3>\n\n"
                            . $modules;
                            break;
                        case "Upgrade":
                            $html .= "<p><b class=\"impact\">Please note:</b> Typically, an upgrade will take less than one day. If the upgrades go as planned with no issues, there should "
                            . "be left over time.  This time should be used as seen fit by the client and the Loop1 engineer. Example tasks include alerts, reporting,"
                            . " views, account management, Polling Engine balancing, cleanup of excess or unknown elements, and any other SolarWinds - related tasks the client and"
                            . "Engineer may agree upon. Extra time is allocated to account for unforeseen software issues during the upgrade process.</p>"
                            . "<h2>" . dayHeader($Day1Bits, "Platform Validation | Software Upgrades") . "</h2>\n"
                            . "<h3>Validation of server platforms</h3>\n"
                            . $servers //add in the "Validation & configuration..." bits from before
                           
                            . "<h3>Pre-Upgrade Tasks</h3>\n<ul>\n"
                            . "<li>Backup of the SolarWinds MS SQL database</li>\n"
                            . "<li>Snapshot of SolarWinds VMs if applicable</li></ul>\n"
                            . "<h3>SolarWinds Software Upgrades</h3>\n\n"
                            . $modules;
                            break;
                        
                    }
} //end function
?>