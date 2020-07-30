<?php
global $isOrionEng;
global $html;
global $hasNPM;
global $hasNCM;
global $hasNTA;
global $hasSAM;
global $hasUDT;
global $EngagementType;

$html .="<h1>Assumptions & Dependencies</h1>\n";
if ($EngagementType == 'NewBuild' || $EngagementType == 'Rebuild' || $EngagementType == 'DBMigration' || $EngagementType == 'EngineMigration'){
$html .="<table width='100%'>\n";
$html .="<tbody>\n";
$html .="<tr id='TitleRow'>\n";
$html .="<td colspan='2' width='100%'>\n";
$html .="Server Requirements\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td width='34%'>\n";
$html .="<h3>Task</h3>\n";
$html .="</td>\n";
$html .="<td width='65%'>\n";
$html .="<h3>Assumptions & Dependencies</h3>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td width='34%'>\n";
$html .="<p><strong>All Installation/Upgrade/Migration tasks</strong></p>\n";
$html .="</td>\n";
$html .="<td width='65%'>\n";
$html .="<p>Servers that meet the minimum or higher specifications as recommended earlier in this document, including any Application servers, Appliances, Additional Polling Engines, Additional Web Servers, and High Availability servers, as applicable</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="</table>\n";
$html .="<p>&nbsp;</p>\n";

}
if ($EngagementType == 'NewBuild' || $EngagementType == 'Rebuild' ) 
{
    include_once ("result/assumptions/install_upgrade.php");
}
if ($EngagementType == 'DBMigration' || $EngagementType == 'EngineMigration') {
    include_once ("result/assumptions/migration.php");
}

$html .="<table width='100%'>\n";
$html .="<tbody>\n";
$html .="<tr id='TitleRow'>\n";
$html .="<td colspan='3' width='90%'>\n";
$html .="Environment Configuration / Access\n";
$html .="</td>\n";
$html .="<td width='9%'>\n";
$html .="Module\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 42px;'>\n";
$html .="<td style='height: 42px;' colspan='3' width='90%'>\n";
$html .="<h3>Client must provide the following for installation and application administration</h3>\n";
$html .="</td>\n";
$html .="<td style='height: 42px;' width='9%'>\n";
$html .="<p><strong>&nbsp;</strong></p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 42px;'>\n";
$html .="<td style='height: 42px;' colspan='2' width='34%'>\n";
$html .="<h4>DELIVERABLE</h4>\n";
$html .="</td>\n";
$html .="<td style='height: 42px;' width='55%'>\n";
$html .="<h4>REQUIREMENT</h4>\n";
$html .="</td>\n";
$html .="<td style='height: 42px;' width='9%'>\n";
$html .="<p>&nbsp;</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 74px;'>\n";
$html .="<td style='height: 74px;' colspan='2' width='34%'>\n";
$html .="<p><strong>SolarWinds Software License and Portal Access</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 74px;' width='55%'>\n";
$html .="<p>Valid software key for SolarWinds Products has been purchased and is accessible.&nbsp; SolarWinds server has direct access to the internet and desktop access or Remote Desktop to the SolarWinds server is provided.&nbsp; If no direct internet access is available, an alternative method for transferring license activation files is available.</p>\n";
$html .="</td>\n";
$html .="<td style='height: 74px;' width='9%'>\n";
$html .="<p>ALL</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 35px;'>\n";
$html .="<td style='height: 35px;' colspan='2' width='34%'>\n";
$html .="<p><strong>SolarWinds Application Access</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 35px;' width='55%'>\n";
$html .="<p>SolarWinds Admin Level Account</p>\n";
$html .="</td>\n";
$html .="<td style='height: 35px;' width='9%'>\n";
$html .="<p>ALL</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 35px;'>\n";
$html .="<td style='height: 35px;' colspan='2' width='34%'>\n";
$html .="<p><strong>SolarWinds Server Access</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 35px;' width='55%'>\n";
$html .="<p>RDP session to the SolarWinds Application server(s), and a local administrator account.</p>\n";
$html .="</td>\n";
$html .="<td style='height: 35px;' width='9%'>\n";
$html .="<p>ALL</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 74px;'>\n";
$html .="<td style='height: 74px;' colspan='2' width='34%'>\n";
$html .="<p><strong>SolarWinds Server Access</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 74px;' width='55%'>\n";
$html .="<p>If this is a remote engagement, the Loop1 Systems engineer will need&nbsp;VPN access&nbsp;to the client&rsquo;s environment unless access can be established via the remote meeting session.&nbsp; Client should be available as needed during the engagement to facilitate any access needs for the scope of work to be completed within the scheduled time.</p>\n";
$html .="</td>\n";
$html .="<td style='height: 74px;' width='9%'>\n";
$html .="<p>ALL</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 72px;'>\n";
$html .="<td style='height: 72px;' colspan='2' width='34%'>\n";
$html .="<p><strong>Email Alerting</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 72px;' width='55%'>\n";
$html .="<p>If email based alert actions are wanted, the Orion server(s) must be given permissions within the client&rsquo;s Exchange server or other email relay.</p>\n";
$html .="<p>&nbsp;</p>\n";
$html .="</td>\n";
$html .="<td style='height: 72px;' width='9%'>\n";
$html .="<p>ALL</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 35px;'>\n";
$html .="<td style='height: 155px;' colspan='2' rowspan='3' width='34%'>\n";
$html .="<p><strong>SolarWinds DB Server Access</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 35px;' width='55%'>\n";
$html .="<p>RDP session to the MS SQL server where the Orion database resides</p>\n";
$html .="</td>\n";
$html .="<td style='height: 227px;' rowspan='4' width='9%'>\n";
$html .="<p>NPM, NTA, NCM, SAM, IPAM, VNQM, WPM, UDT</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 48px;'>\n";
$html .="<td style='height: 48px;' width='55%'>\n";
$html .="<p>Provide access to the SQL application to analyze the state of the Orion database via SQL Server Manager Studio with SA rights</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 72px;'>\n";
$html .="<td style='height: 72px;' width='55%'>\n";
$html .="<p>Provide an account with permissions to analyze MS performance counter statistics on both the Orion Application server and the MS SQL server.</p>\n";
$html .="<p>&nbsp;</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 72px;'>\n";
$html .="<td style='height: 72px;' colspan='2' width='34%'>\n";
$html .="<p><strong>NMS Authentication for Installation</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 72px;' width='55%'>\n";
$html .="<p>Provide a local account with local admin rights to the SolarWinds Application servers for installation of the application</p>\n";
$html .="<p>&nbsp;</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 72px;'>\n";
$html .="<td style='height: 144px;' colspan='2' rowspan='2' width='34%'>\n";
$html .="<p><strong>Orion and SAM Service Accounts</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 72px;' width='55%'>\n";
$html .="<p>WMI credentials are available for Windows-based nodes to be monitored via WMI &ndash; Windows service acct. with permissions to access WMI and Perfmon.</p>\n";
$html .="<p>&nbsp;</p>\n";
$html .="</td>\n";
$html .="<td style='height: 72px;' width='9%'>\n";
$html .="<p>NPM, SAM, NCM, IPAM</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 72px;'>\n";
$html .="<td style='height: 72px;' width='55%'>\n";
$html .="<p>Any necessary credentials (SQL, Oracle, SSH, WMI, RPC) for Server &amp; Application Monitor (SAM) are created and available.</p>\n";
$html .="<p>&nbsp;</p>\n";
$html .="</td>\n";
$html .="<td style='height: 72px;' width='9%'>\n";
$html .="<p>SAM</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 59px;'>\n";
$html .="<td style='height: 59px;' colspan='2' width='34%'>\n";
$html .="<p><strong>Virtualization Credentials </strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 59px;' width='55%'>\n";
$html .="<p>vCenter read-only credentials to monitor Datacenters / Clusters / Hosts / Datastores</p>\n";
$html .="<p>&nbsp;</p>\n";
$html .="</td>\n";
$html .="<td style='height: 59px;' width='9%'>\n";
$html .="<p>NPM, SAM, VMAN</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 48px;'>\n";
$html .="<td style='height: 96px;' colspan='2' rowspan='2' width='34%'>\n";
$html .="<p><strong>NMS Authentication for SNMP &amp; WMI</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 48px;' width='55%'>\n";
$html .="<p>Nodes to be monitored must be SNMP enabled and valid SNMP Read Community Strings for those devices are available.</p>\n";
$html .="</td>\n";
$html .="<td style='height: 96px;' rowspan='2' width='9%'>\n";
$html .="<p>NPM, NTA, NCM, SAM, IPAM, VNQM, UDT,<br /> Kiwi CatTools</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 48px;'>\n";
$html .="<td style='height: 48px;' width='55%'>\n";
$html .="<p>All ACLs / Firewalls must have the proper rules in place to allow Orion access to poll devices via SNMP / ICMP / WMI (where applicable).</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 48px;'>\n";
$html .="<td style='height: 48px;' colspan='2' width='34%'>\n";
$html .="<p><strong>Device Authentication </strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 48px;' width='55%'>\n";
$html .="<p>Device CLI credentials are available (SSH/Telnet) for Network Configuration Manager (NCM).</p>\n";
$html .="</td>\n";
$html .="<td style='height: 48px;' width='9%'>\n";
$html .="<p>NCM, Kiwi CatTools</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr style='height: 59px;'>\n";
$html .="<td style='height: 59px;' colspan='2' width='34%'>\n";
$html .="<p><strong>ServiceNow Integration (optional)</strong></p>\n";
$html .="</td>\n";
$html .="<td style='height: 59px;' width='55%'>\n";
$html .="<p>Admin access to the ServiceNow instance to add the SolarWinds Integration App.</p>\n";
$html .="<p>Port 443 open from the SolarWinds server to the ServiceNow instance.</p>\n";
$html .="</td>\n";
$html .="<td style='height: 59px;' width='9%'>\n";
$html .="<p>&nbsp;</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="</tbody>\n";
$html .="</table>\n";
$html .="<p>&nbsp;</p>\n";

if ($hasNPM == 1) {
    include_once ("result/assumptions/npm.php");
}
if ($hasNTA == 1) {
    include_once ("result/assumptions/NTA.php");
}
if ($hasNCM == 1) {
    include_once ("result/assumptions/NCM.php");
}
if ($hasSAM == 1) {
    include_once ("result/assumptions/SAM.php");
}
if ($hasUDT == true) {
    include_once ("result/assumptions/udt.php");
}
?>