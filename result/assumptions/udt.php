<?php
$html .="<table width='100%'\n";
$html .="<tbody>\n";
$html .="<tr id='TitleRow'>\n";
$html .="<td colspan='3'>\n";
$html .="Orion User Device Tracker (UDT)\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td width='25%'>\n";
$html .="<h3>Task</h3>\n";
$html .="</td>\n";
$html .="<td width='60%'>\n";
$html .="<h3>Assumptions &amp; Dependencies</h3>\n";
$html .="</td>\n";
$html .="<td width='15%'>\n";
$html .="<h3>Completed by</h3>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Adding switches and ports to be monitored</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>A list of desired switches and ports to be monitored.&nbsp; SNMP communications must be enabled between the target devices and the Orion application server.</p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Adding Active directory servers for user tracking</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>A list of domain controllers and credentials with &lsquo;Event LogReader&rsquo; permissions and access to the following WMI namespaces: CIMV2, directory, and RSOP have been provided.</p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Create UDT watch list (optional)</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Mac addresses of machines to be added to watch list.</p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td rowspan='3'>\n";
$html .="<p><strong>Generate Alerts</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Alert Recipients - know what individuals or Distribution Lists alerts will go to.</p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>Escalation Procedures - Orion provides for alert escalation. If this is a desired feature, please have these available prior to the engagement.</p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>Email distribution group addresses for personnel receiving alerts and SMTP server settings have been provided.</p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Generate Reports, Configure Report Scheduler</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Reporting requirements have been established during the requirements phase.&nbsp; Email distribution groups or addresses have been provided for Report Scheduler, and SMTP server settings have been provided.</p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="</tbody>\n";
$html .="</table>\n";
$html .="<p>&nbsp;</p>\n";
?>