<?php
global $isOrionEng;
global $html;
$acronyms = null;
$modules = null;
$hasNetworkModules = false;
global $rdc; //rolling day count
global $NeedsSpecs;
global $isAPMEng;
global $hasNPM;
global $hasNTA;
global $hasNCM;
global $hasSAM;
global $hasSCM;
global $hasIPAM;
global $hasUDT;
global $hasVNQM;
global $hasWPM;
global $hasSRM;
global $hasVMAN;
global $hasDPA;
global $hasWHD;
global $hasSEM;
global $hasLA;
global $hasPM;
global $hasARM;
global $hasAPE;
global $hasAWS;
global $hasHA;
global $hasNTM;
global $hasKiwi;
global $hasDW;
global $hasServU;
global $hasEOC;
global $APITrainDays;
global $hasAPM;
global $IncludeMSEBlurb;


$html .= "<table width='100%'>\n"
. "<tbody>\n"
. "<tr id='TitleRow'>\n"
. "<td colspan='3' width='100%'>\n"
. "Software Installation/Upgrades\n"
. "</td>\n"
. "</tr>\n"
. "<tr>\n"
. "<td width='25%'>\n"
. "<h3>Task</h3>\n"
. "</td>\n"
. "<td width='60%'>\n"
. "<h3>Assumptions &amp; Dependencies</h3>\n"
. "</td>\n"
. "<td width='15%'>\n"
. "<h3>Completed by</h3>\n"
. "</td>\n"
. "</tr>\n"
. "<tr>\n"
. "<td>\n"
. "<p><strong>Product License Size Change</strong></p>\n"
. "</td>\n"
. "<td>\n"
. "<p>No outage will occur for License SIZE upgrades or changes.</p>\n"
. "</td>\n"
. "<td>\n"
. "</td>\n"
. "</tr>\n"
. "<tr>\n"
. "<td>\n"
. "<p><strong>Product Release/Version Change</strong></p>\n"
. "</td>\n"
. "<td>\n"
. "<p>With version upgrade, there will be an outage period during the version change.</p>\n"
. "</td>\n"
. "<td>\n"
. "</td>\n"
. "</tr>\n"
. "<tr>\n"
. "<td>\n"
. "<p><strong>Download SolarWinds product binaries</strong></p>\n"
. "</td>\n"
. "<td>\n"
. "<p>Please download all SolarWinds product binaries prior to the engagement in the interest of saving valuable time for more critical tasks. If downloading any Orion module version at or later than 2018.4, only one binary download is needed and will contain needed files/flags for any Orion module. The Customer Portal will contain versions for 'Online' and 'Offline' installers - please download Offline version if there is a slow or absent connection from the Orion server(s) to the Internet. The Online version will download the needed products during install.</p>\n"
. "</td>\n"
. "<td>\n"
. "</td>\n"
. "</tr>\n"
. "<tr>\n"
. "<td>\n"
. "<p><strong>Software upgrades &ndash; Core modules</strong></p>\n"
. "</td>\n"
. "<td>\n"
. "<p>Ensure there is adequate storage for the database and TempDB.&nbsp; Database size can temporarily grow 25-50% during the upgrade process.</p>\n"
. "</td>\n"
. "<td>\n"
. "</td>\n"
. "</tr>\n"
. "</tbody>\n"
. "</table>\n"
. "<p>&nbsp;</p>\n";


?>