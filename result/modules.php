<?php
global $isOrionEng;
//global $chkNPMInstalled;
$acronyms .="<ul>";
$modules .= "<ul>";
$modulesInstalled .="<ul>";
$modulesToBeInstalled .="<ul>";
if ($NPMDays > 0 || $NPM100 > 0 || $NPM200 > 0 || $chkIncludeNPM == 1 || $NPMSize != "None")
{
    $isOrionEng = true;
    $modules .= "<li>NPM</li>\n";
    $hasNetworkModules = true;
    $hasNPM = true;
    $acronyms .= "<li><strong>NPM</strong> - Network Performance Monitor</li>\n";
	//check if NPM is installed. If it is, add it to installed modules. If not, add it to modules to install.
	if ($chkNPMInstalled == 1) {
		$modulesInstalled .= "<li>NPM - " . $NPMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>NPM - " . $NPMSize . "</li>";
	}

}
if ($NCMDays > 0 || $NCM100 > 0 || $NCM200 > 0 || $chkIncludeNCM == 1 || $NCMSize != "None")
{
    $isOrionEng = true;
    $modules .= "<li>NCM</li>\n";
    $hasNetworkModules = true;
    $hasNCM = true;
    $acronyms .= "<li><strong>NCM</strong> - Network Configuration Manager</li>\n";
	if ($chkNCMInstalled == 1) {
		$modulesInstalled .= "<li>NCM - " . $NCMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>NCM - " . $NCMSize . "</li>";
	}
}
if ($NTADays >  0 || $NTA200 > 0 || $chkIncludeNTA == 1 || $NTASize != "None")
{
    $isOrionEng = true;
    $modules .= "<li>NTA</li>\n";
    $hasNetworkModules = true;
    $hasNTA = true;
    $acronyms .= "<li><strong>NTA</strong> - NetFlow Traffic Analyzer</li>\n";
	if ($chkNTAInstalled == 1) {
		$modulesInstalled .= "<li>NTA - " . $NPMSize . "</li>"; //note that we're using NPM sizes here since they have to match anyway
	} else {
		$modulesToBeInstalled .= "<li>NTA - " . $NPMSize . "</li>";
	}
}

if ($SAMDays >  0 || $SAM200 > 0 || $chkIncludeSAM == 1 || $SAMSize != "None")	
{	
    $isOrionEng = true;	$modules .= "<li>SAM</li>\n";
	//$hasNetworkModules = true;
	$hasSAM = true;
	$acronyms .= "<li><strong>SAM</strong> - Server & Application Monitor</li>\n";
	if ($chkSAMInstalled == 1) {
		$modulesInstalled .= "<li>SAM - " . $SAMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>SAM - " . $SAMSize . "</li>";
	}
}	
if ($IPAMDays >  0 || $IPAM200 > 0 || $chkIncludeIPAM == 1 || $IPAMSize != "None")	
{	
    $isOrionEng = true;
    	$modules .= "<li>IPAM</li>\n";
	$hasNetworkModules = true;
	$hasIPAM = true;
	$acronyms .= "<li><strong>IPAM</strong> - IP Address Manager</li>\n";
	if ($chkIPAMInstalled == 1) {
		$modulesInstalled .= "<li>IPAM - " . $IPAMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>IPAM - " . $IPAMSize . "</li>";
	}
}	
if ($UDTDays >  0 || $UDT200 > 0 || $chkIncludeUDT == 1 || $UDTSize != "None")	
{	
    $isOrionEng = true;
    	$modules .= "<li>UDT</li>\n";
	$hasNetworkModules = true;
	$hasUDT = true;
	$acronyms .= "<li><strong>UDT</strong> - User Device Tracker</li>\n";
	if ($chkUDTInstalled == 1) {
		$modulesInstalled .= "<li>UDT - " . $UDTSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>UDT - " . $UDTSize . "</li>";
	}
}	
if ($VNQMDays >  0 || $VNQM200 > 0 || $chkIncludeVNQM == 1 || $VNQMSize != "None")	
{	
    $isOrionEng = true;
    $modules .= "<li>VNQM</li>\n";
	$hasNetworkModules = true;
	$hasVNQM = true;
	$acronyms .= "<li><strong>VNQM</strong> - VoIP & Network Quality Manager</li>\n";
	if ($chkVNQMInstalled == 1) {
		$modulesInstalled .= "<li>VNQM - " . $VNQMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>VNQM - " . $VNQMSize . "</li>";
	}
}	
if ($WPMDays >  0 || $WPM200 > 0 || $chkIncludeWPM == 1 || $WPMSize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>WPM</li>\n";
//	$hasNetworkModules = true;
	$hasWPM = true;
	$acronyms .= "<li><strong>WPM</strong> - Web Performance Monitor</li>\n";
	if ($chkWPMInstalled == 1) {
		$modulesInstalled .= "<li>WPM - " . $WPMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>WPM - " . $WPMSize . "</li>";
	}
}	
if ($VMANDays >  0 || $VMAN200 > 0 || $chkIncludeVMAN == 1 || $VMANSize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>VMAN</li>\n";
//	$hasNetworkModules = true;
	$hasVMAN = true;
	$acronyms .= "<li><strong>VMAN</strong> - Virtualization Manager</li>\n";
	if ($chkVMANInstalled == 1) {
		$modulesInstalled .= "<li>VMAN - " . $VMANSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>VMAN - " . $VMANSize . "</li>";
	}
}	
if ($SRMDays >  0 || $SRM200 > 0 || $chkIncludeSRM == 1 || $SRMSize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>SRM</li>\n";
//	$hasNetworkModules = true;
	$hasSRM = true;
	$acronyms .= "<li><strong>SRM</strong> - Storage Resource Monitor</li>\n";
	if ($chkSRMInstalled == 1) {
		$modulesInstalled .= "<li>SRM - " . $SRMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>SRM - " . $SRMSize . "</li>";
	}
}	
if ($LADays >  0 || $LA200 > 0 || $chkIncludeLA == 1 || $LASize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>LA</li>\n";
	$hasNetworkModules = true;
	$hasLA = true;
	$acronyms .= "<li><strong>LA</strong> - Log Analyzer</li>\n";
	if ($chkLAInstalled == 1) {
		$modulesInstalled .= "<li>LA - " . $LASize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>LA - " . $LASize . "</li>";
	}
}	
if ($SCMDays >  0 || $SCM200 > 0 || $chkIncludeSCM == 1 || $SCMSize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>SCM</li>\n";
//	$hasNetworkModules = true;
	$hasSCM = true;
	$acronyms .= "<li><strong>SCM</strong> - Server Configuration Manager</li>\n";
	if ($chkSCMInstalled == 1) {
		$modulesInstalled .= "<li>SCM - " . $SCMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>SCM - " . $SCMSize . "</li>";
	}
}	
if ($SEMDays >  0 || $SEM200 > 0 || $chkIncludeSEM == 1 || $SEMSize != "None")	
{	
//  $GLOBALS['isOrionEng'] = true;
	$modules .= "<li>SEM</li>\n";
//	$hasNetworkModules = true;
	$hasSEM = true;
	$acronyms .= "<li><strong>SEM</strong> - Security Event Manager</li>\n";
	if ($chkSEMInstalled == 1) {
		$modulesInstalled .= "<li>SEM - " . $SEMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>SEM - " . $SEMSize . "</li>";
	}
}	
if ($DPADays >  0 || $DPA200 > 0 || $chkIncludeDPA == 1 || $numDPA > 0)	
{	
//  $GLOBALS['isOrionEng'] = true;
	$modules .= "<li>DPA</li>\n";
//	$hasNetworkModules = true;
	$hasDPA = true;
	$acronyms .= "<li><strong>DPA</strong> - Database Performance Analyzer</li>\n";
	if ($chkDPAInstalled == 1) {
		$modulesInstalled .= "<li>DPA - " . $DPASize . " Instances</li>";
	} else {
		$modulesToBeInstalled .= "<li>DPA - " . $DPASize . " Instances</li>";
	}
}	
if ($WHDDays >  0 || $WHD200 > 0 || $chkIncludeWHD == 1 || $numWHD > 0)	
{	
//	$GLOBALS['isOrionEng'] = true;
	$modules .= "<li>WHD</li>\n";
//	$hasNetworkModules = true;
	$hasWHD = true;
	$acronyms .= "<li><strong>WHD</strong> - Web Help Desk</li>\n";
	if ($chkWHDInstalled == 1) {
		$modulesInstalled .= "<li>WHD - " . $numWHD . " Seats</li>";
	} else {
		$modulesToBeInstalled .= "<li>WHD - " . $numWHD . " Seats</li>";
	}
}	
if ($PMDays >  0 || $PM200 > 0 || $chkIncludePM == 1 || $PMSize != "None")	
{	
//	    $GLOBALS['isOrionEng'] = true;
	$modules .= "<li>PM</li>\n";
//	$hasNetworkModules = true;
	$hasPM = true;
	$acronyms .= "<li><strong>PM</strong> - Patch Manager</li>\n";
	if ($chkSCMInstalled == 1) {
		$modulesInstalled .= "<li>PM - " . $PMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>PM - " . $PMSize . "</li>";
	}
}	
if ($ARMDays >  0 || $ARM200 > 0 || $chkIncludeARM == 1 || $ARMSize != "None")	
{	
//	    $GLOBALS['isOrionEng'] = true;
	$modules .= "<li>ARM</li>\n";
//	$hasNetworkModules = true;
	$hasARM = true;
	$acronyms .= "<li><strong>ARM</strong> - Access Rights Manager</li>\n";
	if ($chkARMInstalled == 1) {
		$modulesInstalled .= "<li>ARM - " . $ARMSize . "</li>";
	} else {
		$modulesToBeInstalled .= "<li>ARM - " . $ARMSize . "</li>";
	}
}	
if ($APEDays >  0 || $chkIncludeAPEs == 1 || $numAPEsInstalled > 0 || $numAPEsToInstall > 0)	
{	
    $isOrionEng = true;
	$modules .= "<li>APE</li>\n";
//	$hasNetworkModules = true;
	$hasAPE = true;
	$acronyms .= "<li><strong>APE</strong> - Additional Polling Engine</li>\n";
	if ($numAPEsInstalled > 0){
		$modulesInstalled .= "<li>Additional Polling Engines - Qty. " . $numAPEsInstalled . "</li>";
	}
	
	if ($numAPEsToInstall> 0){
		$modulesToBeInstalled .= "<li>Additional Polling Engines - Qty. " . $numAPEsToInstall . "</li>";
	}
}	

if ($AWSDays >  0 || $chkIncludeAWSs == 1 || $numAWSsInstalled > 0 || $numAWSsToInstall > 0)
{	
    $isOrionEng = true;
	$modules .= "<li>AWS</li>\n";
//	$hasNetworkModules = true;
	$hasAWS = true;
	$acronyms .= "<li><strong>AWS</strong> - Additional Web Server</li>\n";
	
	if ($numAWSsInstalled > 0){
		$modulesInstalled .= "<li>Additional Web Servers - Qty. " . $numAWSsInstalled . "</li>";
	}
	
	if ($numAWSsToInstall > 0){
		$modulesToBeInstalled .= "<li>Additional Web Servers - Qty. " . $numAWSsToInstall . "</li>";
	}
}	
if ($HADays >  0 || $chkIncludeHA == 1 || $numHAInstalled > 0 || $numHAToInstall > 0)	
{	
    $isOrionEng = true;
	$modules .= "<li>Orion HA</li>\n";
	$hasNetworkModules = true;
	$hasHA = true;
	$acronyms .= "<li><strong>HA</strong> - SolarWinds Orion High Availability</li>\n";
	
	if ($numHAInstalled > 0){
		$modulesInstalled .= "<li>Orion HA - Qty. " . $numHAInstalled . "</li>";
	}
	
	if ($numAPEsToInstall> 0){
		$modulesToBeInstalled .= "<li>Orion HA - Qty. " . $numHAToInstall . "</li>";
	}
}	
if ($EOCDays > 0 || $chkIncludeEOC == 1)
{
    $hasEOC = true;
    $acronyms .= "<li><strong>EOC</strong> - Enterprise Operations Console</li>\n";
    $modules .= "<li>EOC</li>\n";
}
if ($NTMDays >  0 || $chkIncludeNTM == 1)	
{	
	$modules .= "<li>NTM</li>\n";
	$hasNetworkModules = true;
	$hasNTM = true;
	$acronyms .= "<li><strong>NTM</strong> - Network Topology Mapper</li>\n";
}	
if ($KiwiDays >  0 || $chkIncludeKiwi == 1)	
{	
    $modules .= "<li>Kiwi</li>\n";
	$hasNetworkModules = true;
	$hasKiwi = true;
	$acronyms .= "<li><strong>Kiwi Syslog Server</strong></li>\n";
}	
if ($DWDays >  0 || $chkIncludeDW == 1)	
{	
    $acronyms .= "<li><strong>DW</strong> - DameWare</li>\n";
    $acronyms .= "<ul><li><strong>DameWare</strong> Remote Support </li>";
    $acronyms .= "<li><strong>DameWare MRC</strong> DameWare Mini Remote Control</li>\n</ul>";
	$modules .= "<li>DW</li>\n";
	$hasDW = true;
}	
if ($ServUDays >  0 || $chkIncludeServU == 1)	
{	
    $acronyms .= "<li><strong>Serv-U</strong></li>\n";
    $modules .= "<li>Serv-U</li>\n";
}	
if ($APMDays > 0 || $chkIncludeAPM == 1)
{
    $hasAPM = true;
    $modules .= "<li>APM</li>\n";
    $acronyms .= "<li><strong>APM</strong> - AppOptics Application Performance Monitor</li>\n";
    $GLOBALS['isAPMEng'] = true;
}

$acronyms .="</ul>";
$KTModules = $modules; //setting up for admin/kt stuff later
$modules .= "</ul>";
$modulesInstalled .= "</ul>";
$modulesToBeInstalled .= "</ul>";

