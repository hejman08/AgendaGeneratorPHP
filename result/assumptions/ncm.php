<?php
$html .="<table>\n";
$html .="<tbody>\n";
$html .="<tr id='TitleRow'>\n";
$html .="<td colspan='2'>\n";
$html .="Orion Network Configuration Manager: (NCM)\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<h3>Task</h3>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<h3>Assumptions &amp; Dependencies</h3>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Populate inventory from Orion</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Orion Database is fully populated with desired nodes for import.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Generate scheduled Jobs</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Schedules have been defined for backup frequency, purge frequency; any other recurring jobs desired have been identified.&nbsp;</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Generate policy reports</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Applicable policies for compliance verification have been identified.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Enable Real Time Change Detection Notification</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Appropriate email distribution lists have been identified, email server settings are defined, and syslog system to be used is defined.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Enable Approvals</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Appropriate user roles for staff are defined.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Build Connection Profiles</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>SSH / Telnet / SNMP credentials have been provided for all devices to be managed by NCM.&nbsp; Devices must be configured to allow the Orion server to communicate with the managed network devices via the preferred protocol.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Configure Cisco Smart Net Adviser Connector</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Connector has been downloaded from Customer Portal</p>\n";
$html .="<p>Desired reports have been identified; list of available reports can be found <a href='https://thwack.solarwinds.com/community/solarwinds-community/product-blog/blog/2016/03/22/your-intro-to-ncm-connector-for-cisco-smart-net-total-care'>here</a>.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="</tbody>\n";
$html .="</table>\n";
$html .="<p>&nbsp;</p>\n";
?>