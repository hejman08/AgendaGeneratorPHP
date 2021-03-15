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
global $EngagementType;


$html .= "<table width='100%'>\n"
. "<tbody>\n"
. "<tr id ='TitleRow'>\n"
. "<td colspan='3' width='100%'>\n"
. "Migration\n"
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
. "<p><strong>Download SolarWinds product binaries</strong></p>\n"
. "</td>\n"
. "<td>\n"
. "<p>Please download all SolarWinds product binaries to the new servers prior to the engagement in the interest of saving valuable time for more critical tasks.</p>\n"
. "</td>\n"
. "<td>\n"
. "</td>\n"
. "</tr>\n";
if ($EngagementType == 'DBMigration'){
    $html .= "<tr>\n"
    . "<td>\n"
    
    . "<p><strong>Migrate SQL Database</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>Requires SA rights on both MS SQL platforms to back up and then restore the database. Confirm disk space available for backup and restore of database.</p>\n"
    . "<p>New SQL Database Server meets recommended specs.</p>\n"
    . "</td>\n"
    . "<td>\n"
. "</td>\n"
. "</tr>\n"; 
} else {
    $html .= "<tr>\n"
    . "<td>\n"
    
    . "<p><strong>Access DB for Engine Migration</strong></p>\n"
    . "</td>\n"
    . "<td>\n"
    . "<p>Requires SA rights on MS SQL platform to backup the database and perform queries related to Engine migration. Confirm disk space available "
    . "for backup and restore of database.</p>\n"
    . "</td>\n"
    . "<td>\n"
. "</td>\n"
. "</tr>\n"; 
}
$html .= "<tr>\n"
. "<td>\n"
. "<p><strong>Migrate Application</strong></p>\n"
. "</td>\n"
. "<td>\n"
. "<p>Administrator rights on designated servers. Local administrator rights recommended. Administrator rights to the Orion system.</p>\n"
. "</td>\n"
. "<td>\n"
. "</td>\n"
. "</tr>\n"
. "<tr>\n"
. "<td>\n"
. "<p><strong>Transfer License Keys</strong></p>\n"
. "</td>\n"
. "<td>\n"
. "<p>Access to the SolarWinds customer portal for the purpose of obtaining current activation keys. If temporary keys are in use on the new SolarWinds servers, "
. "please note that the production license keys will need to be transferred prior to the 30-day temp license window expiring.</p>\n"
. "</td>\n"
. "<td>\n"
. "</td>\n"
. "</tr>\n"
. "<tr>\n"
. "<td colspan='3' width='100%'>\n"
. "<p><strong>With all migrations, there will be an outage period during the changeover. The amount of time varies based on size of existing database, "
. "typically 1 hour.</strong></p>\n"
. "<p><strong>For migrations where the new application server will have a new IP and hostname please refer to the following link - </strong>"
. "<a href='https://documentation.solarwinds.com/en/success_center/orionplatform/Content/Migrate_SolarWinds_to_a_new_server_with_a_new_IP_and_hostname.htm'>"
. "Migrate SolarWinds Orion products to a new server with a new IP and hostname</a></p>\n"
. "<p><strong>For migration where the application server will use the existing IP and hostname please refer to the following link - </strong>"
. "<a href='https://documentation.solarwinds.com/en/success_center/orionplatform/Content/Migrate_SolarWinds_to_a_new_server_using_the_same_IP_and_hostname.htm'>"
. "Migrate SolarWinds Orion products to a new server using the same IP and hostname</a></p>\n"
. "<p><strong>For migration of the SolarWinds database, please refer to the following link &ndash;</strong></p>\n"
. "<p><a href='https://documentation.solarwinds.com/en/success_center/orionplatform/Content/Migrate_the_SolarWinds_Orion_SQL_database_to_a_new_server.htm'>Migrate "
. "the SolarWinds Orion SQL database to a new server</a></p>\n"
. "</td>\n"
. "</tr>\n"
. "</tbody>\n"
. "</table>\n"
. "<p>&nbsp;</p>\n";


?>