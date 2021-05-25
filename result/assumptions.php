<?php
global $isOrionEng;
global $html;
global $hasNPM;
global $hasHA;
global $hasNCM;
global $hasSCM;
global $hasSEM;
global $hasPM;
global $hasNTA;
global $hasSAM;
global $hasUDT;
global $hasSRM;
global $hasVMAN;
global $hasDPA;
global $hasVNQM;
global $hasWPM;
global $hasWHD;
global $hasARM;
global $hasNTM;
global $hasKiwi;
global $hasEOC;
global $hasIPAM;
global $EngagementType;

$html .= "<h1>Assumptions & Dependencies</h1>\n";
if ($EngagementType == 'NewBuild' || $EngagementType == 'Rebuild' || $EngagementType == 'DBMigration' || $EngagementType == 'EngineMigration'){
    $html .="<table width='100%'>\n"
    . "<tbody>\n"
    . "<tr id='TitleRow'>\n"
    . "<td colspan='3' width='100%'>\n"
    . "Server Requirements\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr>\n"
    . "<td width='25%'>\n"
    . "<h3>Task</h3>\n"
    . "</td>\n"
    . "<td width='60%'>\n"
    . "<h3>Assumptions &amp Dependencies</h3>\n"
    . "</td>\n"
    . "<td width='15%'>\n"
    . "<h3>Completed by</h3>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr>\n"
    . "<td rowspan = '1'>\n"
    . "<p><strong>All Installation/Upgrade/Migration tasks</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>Servers that meet the minimum or higher specifications as recommended earlier in this document, including any Application servers, Appliances, Additional Polling Engines, Additional Web Servers, and High Availability servers, as applicable</p>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
//. "<tr>\n"
//. "</td>\n"
//. "<td>\n"
//. "<p>All anti-virus exclusions as described in <a href='https://support.solarwinds.com/SuccessCenter/s/article/Files-and-directories-to-exclude-from-antivirus-scanning-for-Orion-Platform-products?language=en_US'>this link</a> have been applied. It is strongly recommended to turn off anti-virus entirely or prevent its install until SolarWinds software installation is complete</p>\n"
//. "</td>\n"
//. "<td>\n"
//. "</td>\n"
//. "</tr>\n"
    . "</table>\n"
    . "<p>&nbsp</p>\n";

}
if ($EngagementType == 'NewBuild' || $EngagementType == 'Rebuild' || $EngagementType == 'Upgrade') 
{
    include_once ("result/assumptions/install_upgrade.php");
}
if ($EngagementType == 'DBMigration' || $EngagementType == 'EngineMigration') {
    include_once ("result/assumptions/migration.php");
}

$html .="<table width='100%'>\n"
    . "<tbody>\n"
    . "<tr id='TitleRow'>\n"
    . "<td colspan='4' width='100%'>\n"
    . "Environment Configuration / Access\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr>\n"
    . "<td colspan='4'>\n"
    . "<h4>Client must provide the following for installation and application administration</h4>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr>\n"
    . "<td width='20%'>\n"
    . "<h3>Deliverable</h3>\n"
    . "</td>\n"
    . "<td width='50%'>\n"
    . "<h3>Requirement</h3>\n"
    . "</td>\n"
    . "<td width='15%'>\n"
    . "<h3>Module</h3>\n"
    . "</td>\n"
    . "<td width='15%'>\n"
    . "<h3>Completed By</h3>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p><strong>SolarWinds Software License and Portal Access</strong></p>\n"
    . "</td>\n"
    . "<td  width='55%'>\n"
    . "<p>Valid software key for SolarWinds Products has been purchased and is accessible.&nbsp SolarWinds server has direct access to the internet and desktop access or Remote Desktop to the SolarWinds server is provided.&nbsp If no direct internet access is available, an alternative method for transferring license activation files is available.</p>\n"
    . "</td>\n"
    . "<td  width='9%'>\n"
    . "<p>ALL</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr>\n"
    . "<td>\n"
    . "<p><strong>SolarWinds Application Access</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>SolarWinds Admin Level Account</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>ALL</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr>\n"
    . "<td>\n"
    . "<p><strong>SolarWinds Server Access</strong></p>\n"
    . "</td>\n"
    . "<td >\n"
    . "<p>RDP session to the SolarWinds Application server(s), and a local administrator account.</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>ALL</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p><strong>SolarWinds Server Access</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>If this is a remote engagement, the Loop1, LLC engineer will need&nbspVPN access&nbspto the client&rsquos environment unless access can be established via the remote meeting session.&nbsp Client should be available as needed during the engagement to facilitate any access needs for the scope of work to be completed within the scheduled time.</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>ALL</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p><strong>Email Alerting</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>If email based alert actions are wanted, the Orion server(s) must be given permissions within the client&rsquos Exchange server or other email relay.</p>\n"
    . "<p>&nbsp</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>ALL</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr>\n"
    . "<td rowspan='3'>\n"
    . "<p><strong>SolarWinds DB Server Access</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>RDP session to the MS SQL server where the Orion database resides</p>\n"
    . "</td>\n"
    . "<td rowspan='4'>\n"
    . "<p>NPM, NTA, NCM, SAM, IPAM, VNQM, WPM, UDT</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p>Provide access to the SQL application to analyze the state of the Orion database via SQL Server Manager Studio with SA rights. Also insure SSMS is installed.</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p>Provide an account with permissions to analyze MS performance counter statistics on both the Orion Application server and the MS SQL server.</p>\n"
    . "<p>&nbsp</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p><strong>NMS Authentication for Installation</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>Provide a local account with local admin rights to the SolarWinds Application servers for installation of the application</p>\n"
    . "<p>&nbsp</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td rowspan='2'>\n"
    . "<p><strong>Orion and SAM Service Accounts</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>WMI credentials are available for Windows-based nodes to be monitored via WMI &ndash Windows service acct. with permissions to access WMI and Perfmon.</p>\n"
    . "<p>&nbsp</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>NPM, SAM, NCM, IPAM</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p>Any necessary credentials (SQL, Oracle, SSH, WMI, RPC) for Server &amp Application Monitor (SAM) are created and available.</p>\n"
    . "<p>&nbsp</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>SAM</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p><strong>Virtualization Credentials </strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>vCenter read-only credentials to monitor Datacenters / Clusters / Hosts / Datastores</p>\n"
    . "<p>&nbsp</p>\n"
    . "<p>Virtualization trees will be monitored by adding vCenter to Orion and gathering configuration data</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>NPM, SAM, VMAN</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td rowspan='2'>\n"
    . "<p><strong>NMS Authentication for SNMP &amp WMI</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>Nodes to be monitored must be SNMP enabled and valid SNMP Read Community Strings for those devices are available.</p>\n"
    . "</td>\n"
    . "<td  rowspan='2'>\n"
    . "<p>NPM, NTA, NCM, SAM, IPAM, VNQM, UDT,<br /> Kiwi CatTools</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p>All ACLs / Firewalls must have the proper rules in place to allow Orion access to poll devices via SNMP / ICMP / WMI (where applicable).</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p><strong>Device Authentication </strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>Device CLI credentials are available (SSH/Telnet) for Network Configuration Manager (NCM).</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>NCM, Kiwi CatTools</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "<tr >\n"
    . "<td>\n"
    . "<p><strong>ServiceNow Integration (optional)</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>Admin access to the ServiceNow instance to add the SolarWinds Integration App.</p>\n"
    . "<p>Port 443 open from the SolarWinds server to the ServiceNow instance.</p>\n"
    . "<p>Please see this <a href='https://support.solarwinds.com/SuccessCenter/s/article/ServiceNow-integration-not-working-for-non-admin-role'> Success Center link </a> for more information.</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>&nbsp</p>\n"
    . "</td>\n"
    . "<td>\n"
    . "</td>\n"
    . "</tr>\n"
    . "</tbody>\n"
    . "</table>\n"
    . "<p>&nbsp</p>\n";

    if ($EngagementType != 'Upgrade'){
        if ($hasNPM == 1) {
            include_once ("result/assumptions/npm.php");
        }
        if ($hasNTA == 1) {
            include_once ("result/assumptions/nta.php");
        }
        if ($hasNCM == 1) {
            include_once ("result/assumptions/ncm.php");
        }
        if ($hasSAM == 1) {
            include_once ("result/assumptions/sam.php");
        }
        if ($hasIPAM == true) {
            include_once ("result/assumptions/ipam.php");
        }
        if ($hasUDT == true) {
            include_once ("result/assumptions/udt.php");
        }
        if ($hasVNQM == true) {
            include_once ("result/assumptions/vnqm.php");
        }
        if ($hasWPM == true) {
            include_once ("result/assumptions/wpm.php");
        }
        if ($hasVMAN == true) {
            include_once ("result/assumptions/vman.php");
        }
        if ($hasSRM == true) {
            include_once ("result/assumptions/srm.php");
        }
        if ($hasSCM == true) {
            include_once ("result/assumptions/scm.php");
        }
        if ($hasHA == true) {
            include_once ("result/assumptions/ha.php");
        }
        if ($hasSEM == true) {
            include_once ("result/assumptions/sem.php");
        }
        if ($hasDPA == true) {
            include_once ("result/assumptions/dpa.php");
        }

        if ($hasWHD == true) {
            include_once ("result/assumptions/whd.php");
        }
        if ($hasPM == true) {
            include_once ("result/assumptions/pman.php");
        }

        if ($hasARM == true) {
            include_once ("result/assumptions/arm.php");
        }

        if ($hasNTM == true) {
            include_once ("result/assumptions/ntm.php");
        }

        if ($hasKiwi == true) {
            include_once ("result/assumptions/kiwi.php");
        }

        if ($hasDW == true) {
            include_once ("result/assumptions/dw.php");
            
        }

        if ($hasEOC == true) {
            include_once ("result/assumptions/eoc.php");
        }
    }
?>