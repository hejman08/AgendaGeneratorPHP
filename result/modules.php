<?php
global $isOrionEng;
$acronyms .="<ul>";
$modules .= "<ul>";
if ($NPMDays > 0 || $NPMTrainDays > 0 || $chkIncludeNPM == 1 || $NPMSize != "None")
{
    $isOrionEng = true;
    $modules .= "<li>NPM</li>\n";
    $hasNetworkModules = true;
    $hasNPM = true;
    $acronyms .= "<li><strong>NPM</strong> - Network Performance Monitor</li>\n";
}
if ($NCMDays > 0 || $NCMTrainDays > 0 || $chkIncludeNPM == 1 || $NCMSize != "None")
{
    $isOrionEng = true;
    $modules .= "<li>NCM</li>\n";
    $hasNetworkModules = true;
    $hasNCM = true;
    $acronyms .= "<li><strong>NCM</strong> - Network Configuration Manager</li>\n";
}
if ($NTADays >  0 || $NTATrainDays > 0 || $chkIncludeNTA == 1 || $NTASize != "None")
{
    $isOrionEng = true;
    $modules .= "<li>NTA</li>\n";
    $hasNetworkModules = true;
    $hasNTA = true;
    $acronyms .= "<li><strong>NTA</strong> - NetFlow Traffic Analyzer</li>\n";
}

if ($SAMDays >  0 || $SAMTrainDays > 0 || $chkIncludeSAM == 1 || $SAMSize != "None")	
{	
    $isOrionEng = true;	$modules .= "<li>SAM</li>\n";
	//$hasNetworkModules = true;
	$hasSAM = true;
	$acronyms .= "<li><strong>SAM</strong> - Server & Application Monitor</li>\n";
}	
if ($IPAMDays >  0 || $IPAMTrainDays > 0 || $chkIncludeIPAM == 1 || $IPAMSize != "None")	
{	
    $isOrionEng = true;
    	$modules .= "<li>IPAM</li>\n";
	$hasNetworkModules = true;
	$hasIPAM = true;
	$acronyms .= "<li><strong>IPAM</strong> - IP Address Manager</li>\n";
}	
if ($UDTDays >  0 || $UDTTrainDays > 0 || $chkIncludeUDT == 1 || $UDTSize != "None")	
{	
    $isOrionEng = true;
    	$modules .= "<li>UDT</li>\n";
	$hasNetworkModules = true;
	$hasUDT = true;
	$acronyms .= "<li><strong>UDT</strong> - User Device Tracker</li>\n";
}	
if ($VNQMDays >  0 || $VNQMTrainDays > 0 || $chkIncludeVNQM == 1 || $VNQMSize != "None")	
{	
    $isOrionEng = true;
    $modules .= "<li>VNQM</li>\n";
	$hasNetworkModules = true;
	$hasVNQM = true;
	$acronyms .= "<li><strong>VNQM</strong> - VoIP & Network Quality Manager</li>\n";
}	
if ($WPMDays >  0 || $WPMTrainDays > 0 || $chkIncludeWPM == 1 || $WPMSize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>WPM</li>\n";
//	$hasNetworkModules = true;
	$hasWPM = true;
	$acronyms .= "<li><strong>WPM</strong> - Web Performance Monitor</li>\n";
}	
if ($VMANDays >  0 || $VMANTrainDays > 0 || $chkIncludeVMAN == 1 || $VMANSize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>VMAN</li>\n";
//	$hasNetworkModules = true;
	$hasVMAN = true;
	$acronyms .= "<li><strong>VMAN</strong> - Virtualization Manager</li>\n";
}	
if ($SRMDays >  0 || $SRMTrainDays > 0 || $chkIncludeSRM == 1 || $SRMSize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>SRM</li>\n";
//	$hasNetworkModules = true;
	$hasSRM = true;
	$acronyms .= "<li><strong>SRM</strong> - Storage Resource Monitor</li>\n";
}	
if ($LADays >  0 || $LATrainDays > 0 || $chkIncludeLA == 1 || $LASize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>LA</li>\n";
	$hasNetworkModules = true;
	$hasLA = true;
	$acronyms .= "<li><strong>LA</strong> - Log Analyzer</li>\n";
}	
if ($SCMDays >  0 || $SCMTrainDays > 0 || $chkIncludeSCM == 1 || $SCMSize != "None")	
{	
    $isOrionEng = true;
	$modules .= "<li>SCM</li>\n";
//	$hasNetworkModules = true;
	$hasSCM = true;
	$acronyms .= "<li><strong>SCM</strong> - Server Configuration Manager</li>\n";
}	
if ($SEMDays >  0 || $SEMTrainDays > 0 || $chkIncludeSEM == 1 || $SEMSize != "None")	
{	
//  $GLOBALS['isOrionEng'] = true;
	$modules .= "<li>SEM</li>\n";
//	$hasNetworkModules = true;
	$hasSEM = true;
	$acronyms .= "<li><strong>SEM</strong> - Security Event Manager</li>\n";
}	
if ($DPADays >  0 || $DPATrainDays > 0 || $chkIncludeDPA == 1 || $numDPA > 0)	
{	
//  $GLOBALS['isOrionEng'] = true;
	$modules .= "<li>DPA</li>\n";
//	$hasNetworkModules = true;
	$hasDPA = true;
	$acronyms .= "<li><strong>DPA</strong> - Database Performance Analyzer</li>\n";
}	
if ($WHDDays >  0 || $WHDTrainDays > 0 || $chkIncludeWHD == 1 || $numWHD > 0)	
{	
//	$GLOBALS['isOrionEng'] = true;
	$modules .= "<li>WHD</li>\n";
//	$hasNetworkModules = true;
	$hasWHD = true;
	$acronyms .= "<li><strong>WHD</strong> - Web Help Desk</li>\n";
}	
if ($PMDays >  0 || $PMTrainDays > 0 || $chkIncludePM == 1 || $PMSize != "None")	
{	
//	    $GLOBALS['isOrionEng'] = true;
	$modules .= "<li>PM</li>\n";
//	$hasNetworkModules = true;
	$hasPM = true;
	$acronyms .= "<li><strong>PM</strong> - Patch Manager</li>\n";
}	
if ($ARMDays >  0 || $ARMTrainDays > 0 || $chkIncludeARM == 1 || $ARMSize != "None")	
{	
//	    $GLOBALS['isOrionEng'] = true;
	$modules .= "<li>ARM</li>\n";
//	$hasNetworkModules = true;
	$hasARM = true;
	$acronyms .= "<li><strong>ARM</strong> - Access Rights Manager</li>\n";
}	
if ($APEDays >  0 || $chkIncludeAPEs == 1 || $numAPEs > 0)	
{	
    $isOrionEng = true;
	$modules .= "<li>APE</li>\n";
//	$hasNetworkModules = true;
	$hasAPE = true;
	$acronyms .= "<li><strong>APE</strong> - Additional Polling Engine</li>\n";
}	

if ($AWSDays >  0 || $chkIncludeAWSs == 1 || $numAWSs > 0)	
{	
    $isOrionEng = true;
	$modules .= "<li>APE</li>\n";
//	$hasNetworkModules = true;
	$hasAWS = true;
	$acronyms .= "<li><strong>AWS</strong> - Additional Web Server</li>\n";
}	
if ($HADays >  0 || $chkIncludeHA == 1)	
{	
    $isOrionEng = true;
	$modules .= "<li>HA</li>\n";
	$hasNetworkModules = true;
	$hasHA = true;
	$acronyms .= "<li><strong>HA</strong> - SolarWinds High Availability</li>\n";
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
