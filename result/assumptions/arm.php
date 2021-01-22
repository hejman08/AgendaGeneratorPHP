<?php
$html .="<table width='100%'>\n";
$html .="<tbody>\n";
$html .="<tr id='TitleRow'>\n";
$html .="<td colspan='3'>\n";
$html .="Access Rights Manager (ARM)\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<h3>Task</h3>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<h3>Assumptions &amp; Dependencies</h3>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<h3>Completed by</h3>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Installation </strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Servers with adequate resources and permissions have been created.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p><strong>Database Access Rights </strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>If the ARM database is not already set up, ARM requires the &ldquo;dbcreator&rdquo; role on the SQL server.</p>\n";
$html .="<p>If the ARM database is already set up, ARM requires the &ldquo;dbowner&rdquo; role on the database.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td rowspan='5'>\n";
$html .="<p><strong>Port requirements</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Port 389 &ndash; LDAP &ndash; Active Directory scanning</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>Ports 139 (NetBIOS), 445 (MS DS CIFS), All WMI ports including port 135 &ndash; File Server scanning</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>Port 1433 &ndash; SQL communication between ARM server (or collector) and SQL server</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>Port 88 &ndash; Kerberos Authentication</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>Port 55555 &ndash; Standard ARM components port. Needs to be opened if the GUI application is installed on any server other than the primary ARM server.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td rowspan='6'>\n";
$html .="<p><strong>Service Account Permissions</strong></p>\n";
$html .="</td>\n";
$html .="<td>\n";
$html .="<p>Local administrator rights on the primary ARM server--may also be a Domain Admin account.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>At least read-only rights to Active Directory for scanning purposes. For ARM Enterprise, service accounts must be assigned to a group that is allowed to change relevant OUs.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>Email distribution group addresses for personnel receiving alerts and SMTP server settings have been provided.</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>AD Logga requires the service account to be a member of the group &ldquo;event log reader.&rdquo;</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>Exchange Logga requires the service account to be a member of the &ldquo;Organization Management&rdquo; and &ldquo;Records Management&rdquo; roles on the selected Exchange server(s).</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="<tr>\n";
$html .="<td>\n";
$html .="<p>SharePoint requires two service accounts:</p>\n";
$html .="<p>Process account for executing the scan processes on the selected collector:</p>\n";
$html .="<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Must have local admin and interactive login privileges on the collector</p>\n";
$html .="<p>Scan account for the actual scan:</p>\n";
$html .="<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Must be the same as the owner account registered for the primary site collection</p>\n";
$html .="</td>\n";
$html .="</tr>\n";
$html .="</tbody>\n";
$html .="</table>\n";
$html .="<p>&nbsp;</p>\n";
?>