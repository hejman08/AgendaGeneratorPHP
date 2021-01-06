<?php
function day1Bits() {
    global $html;
    global $modules;
    global $HCAssessmentDays;
    global $HCReviewDays;
    global $HCRemediationDays;
    global $servers;
    global $hasNetworkModules;
    global $Day1Bits;
    global $EngagementType;
    global $DBMigration;
    global $hasNTA, $hasVNQM, $hasSRM, $hasVMAN, $hasSAM, $hasWPM, $hasDPA, $hasAPM, $hasPMAN, $hasSEM, $isOrionEng;
    global $hasKiwi, $hasMA, $hasNPM, $hasNCM, $hasIPAM, $hasUDT;
    $servers = listServers();
    $html .= "<h1>Engagement Objectives</h1>\n";

    //$html .= listServers();
    if ($HCAssessmentDays > 0) {
        $html .= "<h2>" . dayHeader($HCAssessmentDays, "Health Check Assessment") . "</h2>\n";
        $html .= "<h3>Validation of Server Platforms</h3>\n";
        $html .= $servers;
        $html .= "<h3>Performance Evaluation</h3>\n";
        $html .= $servers;
        $html .= "<h3>Best Practices Evaluation</h3>\n";
        $html .= $modules;
        $html .= "<h3>Recommendations</h3>\n";
        $html .= "<ul>\n<li>Future Considerations</li>\n<ul>";
        $html .= "<li>Scalability Limits</li>\n";
        $html .= "<li>License vs. Product</li>\n";
        $html .= "<li>Design architecture</li>\n";
        $html .= "<li>Current and future needs</li>\n";
        $html .= "<li>HA/DR solutions</li>\n";
        $html .= "<ul>\n<li>WAN vs. LAN</li>\n";
        $html .= "<li>MS SQL options</li>\n";
        $html .= "<li>Active/Active options</li>\n</ul>\n";
        $html .= "<li>Product offering limitations</li>\n";
        $html .= "<li>Test/Lab SolarWinds environment recommendations</li>\n";
        $html .= "<li>3rd party alerting options</li>\n";
        $html .= "<ul>\n<li>NotePager Pro</li>\n";
        $html .= "<li>PagerDuty</li>\n";
        $html .= "<li>OpsGenie</li>\n</ul>\n";
        $html .= "<li>Monitoring Tools Consolidation</li>\n";
        $html .= "<ul>\n<li>Identify functionality overlaps to eliminate duplication of effort and cut costs</li>\n</ul>\n</ul>\n";
        $html .= "<li>Immediate critical remediation tasks to be addressed</li>\n";
        $html .= "<ul>\n<li>Best Practices</li>\n";
        $html .= "<li>Performance issues</li>\n</ul>\n";
        $html .= "<li>Monitoring Gaps</li>\n";
        $html .= "<ul>\n<li>Unused features of currently owned modules</li>\n";
        $html .= "<li>Additional SolarWinds modules that may benefit client</li>\n</ul>\n</ul>\n";
        $html .= "<h3>Health Check Documentation Creation (Loop1 Systems engineer will go offline to produce required documentation)</h3>\n";
        $html .= "<ul>\n<li>Health Assessment details & recommendations</li>\n</ul>\n";
    }
    if ($HCReviewDays > 0)
    {
        $html .= "<h2>". dayHeader($HCReviewDays, "Health Check Document Review & Task Review Session") . "</h2>\n";
        $html .= "<h3>Health Check Documentation Review</h3>\n";
        $html .= "<ul>\n<li>Health Check Documentation review</li>\n";
        $html .= "<ul>\n<li>Performance</li>\n";
        $html .= "<li>Best practices</li>\n";
        $html .= "<li>Recommendations</li>\n</ul>\n</ul>";
        $html .= "<h3>Task Review Session</h3>\n";
        $html .= "<ul>\n<li>Monitoring goals</li>\n<ul>\n";
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
            $html .= "<li>Server infrastructure</li>\n";
            $html .= "<li>Critical Applications</li>\n";
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
            $html .= "<li>Patching Strategy</li>\n";
            $html .= "<ul>\n<li>Microsoft</li>\n";
            $html .= "<li>3rd party applications</li>\n</ul>\n";
        }
        if ($hasSEM == true)
        {
            $html .= "<li>Supported data sources to monitor (SEM)</li>\n";
            $html .= "<ul>\n<li><a href=\"http://www.solarwinds.com/log-event-manager/data-sources\">SEM Supported Data Sources</a></li>\n</ul>\n";
            $html .= "<li>Security requirements (SEM)</li>\n";
            $html .= "<ul>\n<li>Industry compliance - HIPAA, PCI, SOX, etc.</li>\n";
            $html .= "<li>Internal policies</li>\n</ul>\n";
        }
        $html .= "<li>SolarWinds deployment redesign (if determined to be a requirement/recommendation)</li>\n</ul>\n";
        if ($isOrionEng == true)
        {
            $html .= "<li>Custom Property strategy</li>\n";
        }
        $html .= "<ul>\n<li>SLA's</li>\n";
        $html .= "<li>Warning/Critical thresholds</li>\n</ul>\n";
        $html .= "<li>Alert strategy</li>\n";
        $html .= "<ul>\n<li>Notification</li>\n";
        $html .= "<li>Escalation protocol</li>\n</ul>\n";
        $html .= "<li>User access control</li>\n";
        $html .= "<li>Reporting requirements</li>\n";
        $html .= "<li>Dashboard requirements</li>\n";
        
        if ($isOrionEng == true)
        {
            $html .= "<li>Mapping requirements</li>\n";
        }
        $html .= "</ul>\n";
    }
    if ($HCRemediationDays > 0)
    {
        $html .= "<h2>" . dayHeader($HCRemediationDays, "Environment Remediation") . "</h2>\n";
        $html .= "<p>This time has been set aside for the Loop1 Engineer to work with the client to remediate their SolarWinds environment on an as-time-allows basis. The expectation is that the time will be used to remediate critical items identified as part of the health check, in addition to any pain points or concerns the client may wish to have addressed. Items to be addressed include, but are not limited to alerts, reporting, views, account management, Polling Engine balancing, cleanup of excess or unknown elements, and any other SolarWinds-related tasks the client and Engineer may agree upon.</p>\n";
    }
    switch ($EngagementType)
                    {
                        case "HC":
                            //Nothing to do here, HC stuff covered at beginning.
                            break;

                        case "Rebuild":
                            $html .= "<h2>" . dayHeader($Day1Bits, "Platform Validation | Planning | SolarWinds Software Install") . "</h2>\n";
                            $html .= "<h3>Validation & Configuration of server platforms</h3>\n";
                            $html .= $servers; //add in the "Validation & configuration..." bits from before
                            $html .= "\n<h3>Task Review Session</h3>\n";
                            $html .= "<ul>\n<li>Monitoring goals</li>\n<ul>\n";
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
                                $html .= "<li>Server infrastructure</li>\n";
                                $html .= "<li>Critical Applications</li>\n";
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
                                $html .= "<li>Patching Strategy</li>\n";
                                $html .= "<ul>\n<li>Microsoft</li>\n";
                                $html .= "<li>3rd party applications</li>\n</ul>\n";
                            }
                            if ($hasSEM == true)
                            {
                                $html .= "<li>Supported data sources to monitor (SEM)</li>\n";
                                $html .= "<ul>\n<li><a href=\"http://www.solarwinds.com/log-event-manager/data-sources\">SEM Supported Data Sources</a></li>\n</ul>\n";
                                $html .= "<li>Security requirements (SEM)</li>\n";
                                $html .= "<ul>\n<li>Industry compliance - HIPAA, PCI, SOX, etc.</li>\n";
                                $html .= "<li>Internal policies</li>\n</ul>\n";
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
                                $html .= "<li>NPM</li>\n";
                                $html .= "<ul>\n<li>Devices</li>\n";
                                $html .= "<li>Credentials</li>\n";
                                $html .= "<li>IP's</li>\n";
                                $html .= "<li>Interfaces</li>\n";
                                $html .= "<li>Volumes</li>\n";
                                $html .= "<li>UnDP's</li>\n";
                                $html .= "<li>Custom Properties</li>\n";
                                $html .= "<li>Custom maps</li>\n";
                                $html .= "<li>Groups</li>\n";
                                $html .= "<li>Dependencies</li>\n";
                                $html .= "<li>Alerts</li>\n";
                                $html .= "<li>Reports</li>\n</ul>\n";
                            }
                            if ($hasNTA == true)
                            {
                                $html .= "<li>NTA</li>\n";
                                $html .= "<ul>\n<li>Custom IP Address Groups</li>\n";
                                $html .= "<li>Custom Applications</li>\n</ul>\n";
                            }
                            if ($hasNCM == true)
                            {
                                $html .= "<li>NCM</li>\n";
                                $html .= "<ul>\n<li>Configured jobs</li>\n";
                                $html .= "<li>Configured rules, policies, and reports</li>\n";
                                $html .= "<li>Custom change templates</li>\n";
                                $html .= "<li>Custom scripts</li>\n";
                                $html .= "<li>Archived device configs</li>\n";
                                $html .= "<li>Custom device templates</li>\n</ul>\n";
                            }
                            if ($hasSAM == true)
                            {
                                $html .= "<li>SAM</li>\n";
                                $html .= "<ul>\n<li>Assigned Templates</li>\n";
                                $html .= "<li>Application Custom Properties</li>\n";
                                $html .= "<li>Custom Application Templates/Monitors</li>\n";
                                $html .= "<li>Application Groups</li>\n</ul>\n";
                            }
                            if ($hasIPAM == true)
                            {
                                $html .= "<li>IPAM</li>\n";
                                $html .= "<ul>\n<li>Configured subnet scans</li>\n";
                                $html .= "<li>Custom fields</li>\n</ul>\n";
                            }
                            if ($hasUDT == true)
                            {
                                $html .= "<li>UDT</li>\n";
                                $html .= "<ul>\n<li>Watch list</li>\n";
                                $html .= "<li>White list</li>\n</ul>\n";
                            }
                            if ($hasWPM == true)
                            {
                                $html .= "<li>WPM</li>\n";
                                $html .= "<ul>\n<li>Configured transactions</li>\n</ul>\n";
                            }

                            if ($hasVNQM == true)
                            {
                                $html .= "<li>VNQM</li>\n";
                                $html .= "<ul>\n<li>Configured IP SLA operations</li>\n";
                                $html .= "<li>Monitored VoIP Nodes</li>\n</ul>\n";
                            }
                            if ($hasSRM == true)
                            {
                                $html .= "<li>SRM</li>\n";
                                $html .= "<ul>\n<li>Monitored storage arrays</li>\n</ul>\n";
                            }
                            if ($hasDPA == true)
                            {
                                $html .= "<li>DPA</li>\n";
                                $html .= "<ul>\n<li>Monitored database instances</li>\n";
                                $html .= "<li>Reports</li>\n";
                                $html .= "<li>Custom Alerts</li>\n</ul>\n";
                            }
                            if ($hasSEM == true)
                            {
                                $html .= "<li>SEM</li>\n";
                                $html .= "<ul>\n<li>Enabled rules</li>\n";
                                $html .= "<li>Custom reports</li>\n";
                                $html .= "<li>Connector Profiles</li>\n</ul>\n";
                            }
                            $html .= "</ul>\n";
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Custom Property Strategy</li>\n";
                                $html .= "<ul>\n<li>SLA's</li>\n";
                                $html .= "<li>Thresholds</li>\n";
                                $html .= "<li>Etc.</li>\n</ul>\n";
                            }

                            $html .= "<li>Alert Strategy</li>\n";
                            $html .= "<ul>\n<li>Notification</li>\n";
                            $html .= "<li>Escalation Protocol</li>\n</ul>\n";
                            $html .= "<li>User Access control</li>\n";
                            $html .= "<li>Reporting requirements</li>\n";
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Dashboard requirements</li>\n";
                                $html .= "<li>Mapping requirements</li>\n";
                            }
                            $html .= "</ul>";
                            $html .= "<h3>Installation Tasks</h3>\n";
                            $html .= "<ul>\n<li>Software Installs</li>\n";
                            $html .= $modules;
                            $html .= "</ul>\n"; //end of software install

                            break;
                        case "NewBuild":
                            $html .= "<h2>" . dayHeader($Day1Bits, "Platform Validation | Planning | SolarWinds Software Install") . "</h2>\n";
                            $html .= "<h3>Validation & Configuration of server platforms</h3>\n";
                            $html .= $servers; //add in the "Validation & configuration..." bits from before
                            $html .= "\n<h3>Task Review Session</h3>\n";
                            $html .= "<ul>\n<li>Monitoring goals</li>\n<ul>\n";
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
                                $html .= "<li>Server infrastructure</li>\n";
                                $html .= "<li>Critical Applications</li>\n";
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
                                $html .= "<li>Patching Strategy</li>\n";
                                $html .= "<ul>\n<li>Microsoft</li>\n";
                                $html .= "<li>3rd party applications</li>\n</ul>\n";
                            }
                            if ($hasSEM == true)
                            {
                                $html .= "<li>Supported data sources to monitor (SEM)</li>\n";
                                $html .= "<ul>\n<li><a href=\"http://www.solarwinds.com/log-event-manager/data-sources\">SEM Supported Data Sources</a></li>\n</ul>\n";
                                $html .= "<li>Security requirements (SEM)</li>\n";
                                $html .= "<ul>\n<li>Industry compliance - HIPAA, PCI, SOX, etc.</li>\n";
                                $html .= "<li>Internal policies</li>\n</ul>\n";
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
                                $html .= "<li>Custom Property Strategy</li>\n";
                                $html .= "<ul>\n<li>SLA's</li>\n";
                                $html .= "<li>Thresholds</li>\n";
                                $html .= "<li>Etc.</li>\n</ul>\n";
                            }

                            $html .= "<li>Alert Strategy</li>\n";
                            $html .= "<ul>\n<li>Notification</li>\n";
                            $html .= "<li>Escalation Protocol</li>\n</ul>\n";
                            $html .= "<li>User Access control</li>\n";
                            $html .= "<li>Reporting requirements</li>\n";
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Dashboard requirements</li>\n";
                                $html .= "<li>Mapping requirements</li>\n";
                            }
                            $html .= "</ul>\n</ul>\n<h3>Installation Tasks</h3>\n";
                            $html .= "<ul>\n<li>Software Installs</li>\n\n";
                            $html .= $modules;
                            $html .= "</ul>\n</ul>\n"; //end of software install

                            break;

                        case "ExistingRemediation":
                            $html .= "<h2>" . dayHeader($Day1Bits, "Environment Assessment | Recommendations | Planning | Remediation") . "</h2>\n";
                            $html .= "<h3>Validation of server platforms</h3>\n";
                            $html .= $servers; //add in the "Validation & configuration..." bits from before
                            $html .= "<h3>Performance Evaluation</h3>\n";
                            $html .= $servers; //add in the "Validation & configuration..." bits from before
                            $html .= "<h3>Best Practices Evaluation</h3>\n";
                            $html .= $modules;
                            if ($isOrionEng == true)
                            {
                                $html .= "<li>Core Application MS SQL</li>\n";
                            }
                            $html .= "\n</ul>\n";
                            $html .= "<h3>Recommendations</h3>\n<ul>\n";
                            $html .= "<li>Future considerations</li>\n<ul>\n";
                            $html .= "<li>Scalability limits</li>\n<ul>\n";
                            $html .= "<li>License vs. product</li>\n</ul>\n";
                            $html .= "<li>Design architecture</li>\n<ul>\n";
                            $html .= "<li>Current and future needs</li>\n</ul>\n";
                            $html .= "<li>HA/DR Solutions</li>\n<ul>\n";
                            $html .= "<li>WAN vs. LAN</li>\n";
                            $html .= "<li>MS SQL options</li>\n";
                            $html .= "<li>Active/Active options</li>\n";
                            $html .= "<li>Product offering limitations</li>\n</ul>\n";
                            $html .= "<li>Test/Lab SolarWinds environment recomendations</li>\n";
                            $html .= "<li>3rd Party alerting options</li>\n<ul>\n";
                            $html .= "<li>NotePager Pro</li>\n";
                            $html .= "<li>PagerDuty</li>\n";
                            $html .= "<li>OpsGenie</li>\n</ul>\n</ul>\n";
                            $html .= "<li>Monitoring tools consolidation</li>\n<ul>\n";
                            $html .= "<li>Identify functionality overlaps to eliminate duplication of effort and cut costs</li>\n</ul>\n";
                            $html .= "<li>Immediate critical remediation tasks to be addressed</li>\n<ul>\n";
                            $html .= "<li>Best practices</li>\n";
                            $html .= "<li>Performance issues</li>\n</ul>\n";
                            $html .= "<li>Monitoring gaps</li>\n<ul>\n";
                            $html .= "<li>Unused features of currently owned modules</li>\n";
                            $html .= "<li>Additional SolarWinds products that may benefit client</li>\n</ul>\n</ul>\n";

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
                            $html .= "<p><b class=\"impact\">Please note:</b> Typically, an upgrade and migration will take less than one day. If the upgrades go as planned with no issues, there should be left over time.  This time should be used as seen fit by the client and the Loop1 engineer. Example tasks include alerts, reporting, views, account management, Polling Engine balancing, cleanup of excess or unknown elements, and any other SolarWinds - related tasks the client and Engineer may agree upon. Extra time is allocated to account for unforeseen software issues during the upgrade process.</p>";
                            $html .= "<h2>" . dayHeader($Day1Bits, "Platform Validation | Migration | Software Upgrades") . "</h2>\n";
                            $html .= "<h3>Validation of server platforms</h3>\n";
                            $html .= $servers; //add in the "Validation & configuration..." bits from before
                            $html .= "<h3>Migration Informational Links</h3>\n";
                            $html .= "<p>For migrations where the new application server(s) will have a new IP and/or hostname, see <a href='https://documentation.solarwinds.com/en/Success_Center/orionplatform/Content/Migrate_SolarWinds_to_a_new_server_with_a_new_IP_and_hostname.htm'>this link</a></p>";
                            $html .= "<p>For migrations where the new application server(s) will reuse the same IP and hostname, see <a href='https://documentation.solarwinds.com/en/success_center/orionplatform/Content/Migrate_SolarWinds_to_a_new_server_using_the_same_IP_and_hostname.htm'>this link</a></p>";
                            if ($DBMigration == true)
                            {
                                $html .= "<p>For more information regarding the migration of the SolarWinds database(s), see <a href='https://documentation.solarwinds.com/en/success_center/orionplatform/Content/Migrate_the_SolarWinds_Orion_SQL_database_to_a_new_server.htm'>this link</a></p>";
                            }
                            $html .= "<h3>SolarWinds Migration Tasks</h3>\n<ul>\n";
                            $html .= "<li>Stop SolarWinds services</li>\n";
                            $html .= "<li>Backup of the SolarWinds MS SQL database</li>\n";
                            if ($DBMigration == true)
                            {
                                $html .= "<li>Restore of the SolarWinds MS SQL database on new MS SQL instance</li>\n";
                            }
                            $html .= "<li>Migration of the Core Applications to new server(s)</li>\n";
                            $html .= "<li>Deactivation of licenses from old server(s)</li>\n";
                            $html .= "<li>Installation of software on new server(s)(must be same versions as current environment)</li>\n";
                            $html .= $modules;
                            $html .= "<li>Activation of licenses on new server(s)</li></ul>";
                            $html .= "<h3>SolarWinds Software Upgrades</h3>\n\n";
                            $html .= $modules;
                            break;
                        case "Upgrade":
                            $html .= "<p><b class=\"impact\">Please note:</b> Typically, an upgrade will take less than one day. If the upgrades go as planned with no issues, there should be left over time.  This time should be used as seen fit by the client and the Loop1 engineer. Example tasks include alerts, reporting, views, account management, Polling Engine balancing, cleanup of excess or unknown elements, and any other SolarWinds - related tasks the client and Engineer may agree upon. Extra time is allocated to account for unforeseen software issues during the upgrade process.</p>";
                            $html .= "<h2>" . dayHeader($Day1Bits, "Platform Validation | Software Upgrades") . "</h2>\n";
                            $html .= "<h3>Validation of server platforms</h3>\n";
                            $html .= $servers; //add in the "Validation & configuration..." bits from before
                           
                            $html .= "<h3>Pre-Upgrade Tasks</h3>\n<ul>\n";
                            $html .= "<li>Backup of the SolarWinds MS SQL database</li>\n";
                            $html .= "<li>Snapshot of SolarWinds VMs if applicable</li></ul>\n";
                            $html .= "<h3>SolarWinds Software Upgrades</h3>\n\n";
                            $html .= $modules;
                            break;
                        
                    }
} //end function
?>