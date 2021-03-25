<?php
global $isOrionEng;
global $html;
$acronyms = null;
$modules = null;
global $modulesInstalled;
global $modulesToBeInstalled;
$hasNetworkModules = false;
$hasNPM = false;
global $rdc; //rolling day count
global $NeedsSpecs;
global $isAPMEng;
global $hasNPM;//, $chkNPMInstalled;
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
global $chkNPMInstalled, $chkNTAInstalled;


//actual POST variables- Check what was filled out on the form, convert to PHP vars for later use

if (isset($_POST['EngagementType'])) 
{ 
    $GLOBALS['EngagementType'] = $_POST['EngagementType']; 
} else { 
    $GLOBALS['EngagementType'] = "None";
    $GLOBALS['ErrorMsg'] .= "No Engagement type was selected";
}
if (isset($_POST['Day1Bits'])) { $Day1Bits = $_POST['Day1Bits']; } else { $Day1Bits = null;}

if (isset($_POST['HCAssessmentDays'])) { $HCAssessmentDays = $_POST['HCAssessmentDays']; } else { $HCAssessmentDays = null;}
if (isset($_POST['HCReviewDays'])) { $HCReviewDays = $_POST['HCReviewDays']; } else { $HCReviewDays = null;}
if (isset($_POST['HCRemediationDays'])) { $HCRemediationDays = $_POST['HCRemediationDays']; } else { $HCRemediationDays = null;}

$IncludeMSEBlurb = isset($_POST['includeMSEBlurb']) ? 1 : 0;

if (isset($_POST['AsBuiltDays'])) { $AsBuiltDays = $_POST['AsBuiltDays']; } else { $AsBuiltDays = null;}

if (isset($_POST['RunbookDays'])) { $RunbookDays = $_POST['RunbookDays']; } else { $RunbookDays = null;}

if (isset($_POST['AdminKTDays'])) { $AdminKTDays = $_POST['AdminKTDays']; } else { $AdminKTDays = null;}

if (isset($_POST['APITrainDays'])) { $APITrainDays = $_POST['APITrainDays']; } else { $APITrainDays = null;}

//NPM
$chkIncludeNPM = isset($_POST['chkIncludeNPM']) ? 1 : 0;
if (isset($_POST['NPMDays'])) { $NPMDays = $_POST['NPMDays']; } else { $NPMDays = null;}
if (isset($_POST['NPMTrainDays'])) { $NPMTrainDays = $_POST['NPMTrainDays']; } else { $NPMTrainDays = null;}

//NCM
$chkIncludeNCM = isset($_POST['chkIncludeNCM']) ? 1 : 0;
if (isset($_POST['NCMDays'])) { $NCMDays = $_POST['NCMDays']; } else { $NCMDays = null;}
if (isset($_POST['NCMTrainDays'])) { $NCMTrainDays = $_POST['NCMTrainDays']; } else { $NCMTrainDays = null;}

//NTA
$chkIncludeNTA = isset($_POST['chkIncludeNTA']) ? 1 : 0;
if (isset($_POST['NTADays'])) { $NTADays = $_POST['NTADays']; } else { $NTADays = null;}
if (isset($_POST['NTATrainDays'])) { $NTATrainDays = $_POST['NTATrainDays']; } else { $NTATrainDays = null;}

//SAM
$chkIncludeSAM = isset($_POST['chkIncludeSAM']) ? 1 : 0;
if (isset($_POST['SAMDays'])) { $SAMDays = $_POST['SAMDays']; } else { $SAMDays = null;}
if (isset($_POST['SAMTrainDays'])) { $SAMTrainDays = $_POST['SAMTrainDays']; } else { $SAMTrainDays = null;}

//IPAM
$chkIncludeIPAM = isset($_POST['chkIncludeIPAM']) ? 1 : 0;
if (isset($_POST['IPAMDays'])) { $IPAMDays = $_POST['IPAMDays']; } else { $IPAMDays = null;}
if (isset($_POST['IPAMTrainDays'])) { $IPAMTrainDays = $_POST['IPAMTrainDays']; } else { $IPAMTrainDays = null;}

//UDT
$chkIncludeUDT = isset($_POST['chkIncludeUDT']) ? 1 : 0;
if (isset($_POST['UDTDays'])) { $UDTDays = $_POST['UDTDays']; } else { $UDTDays = null;}
if (isset($_POST['UDTTrainDays'])) { $UDTTrainDays = $_POST['UDTTrainDays']; } else { $UDTTrainDays = null;}

//VNQM
$chkIncludeVNQM = isset($_POST['chkIncludeVNQM']) ? 1 : 0;
if (isset($_POST['VNQMDays'])) { $VNQMDays = $_POST['VNQMDays']; } else { $VNQMDays = null;}
if (isset($_POST['VNQMTrainDays'])) { $VNQMTrainDays = $_POST['VNQMTrainDays']; } else { $VNQMTrainDays = null;}

//WPM
$chkIncludeWPM = isset($_POST['chkIncludeWPM']) ? 1 : 0;
if (isset($_POST['WPMDays'])) { $WPMDays = $_POST['WPMDays']; } else { $WPMDays = null;}
if (isset($_POST['WPMTrainDays'])) { $WPMTrainDays = $_POST['WPMTrainDays']; } else { $WPMTrainDays = null;}

//VMAN
$chkIncludeVMAN = isset($_POST['chkIncludeVMAN']) ? 1 : 0;
if (isset($_POST['VMANDays'])) { $VMANDays = $_POST['VMANDays']; } else { $VMANDays = null;}
if (isset($_POST['VMANTrainDays'])) { $VMANTrainDays = $_POST['VMANTrainDays']; } else { $VMANTrainDays = null;}

//SRM
$chkIncludeSRM = isset($_POST['chkIncludeSRM']) ? 1 : 0;
$chkSRMProfiler = isset($_POST['chkSRMProfiler']) ? 1 : 0;
if (isset($_POST['SRMDays'])) { $SRMDays = $_POST['SRMDays']; } else { $SRMDays = null;}
if (isset($_POST['SRMTrainDays'])) { $SRMTrainDays = $_POST['SRMTrainDays']; } else { $SRMTrainDays = null;}

//LA
$chkIncludeLA = isset($_POST['chkIncludeLA']) ? 1 : 0;
if (isset($_POST['LADays'])) { $LADays = $_POST['LADays']; } else { $LADays = null;}
if (isset($_POST['LATrainDays'])) { $LATrainDays = $_POST['LATrainDays']; } else { $LATrainDays = null;}

//SCM
$chkIncludeSCM = isset($_POST['chkIncludeSCM']) ? 1 : 0;
if (isset($_POST['SCMDays'])) { $SCMDays = $_POST['SCMDays']; } else { $SCMDays = null;}
if (isset($_POST['SCMTrainDays'])) { $SCMTrainDays = $_POST['SCMTrainDays']; } else { $SCMTrainDays = null;}

//SEM
$chkIncludeSEM = isset($_POST['chkIncludeSEM']) ? 1 : 0;
if (isset($_POST['SEMDays'])) { $SEMDays = $_POST['SEMDays']; } else { $SEMDays = null;}
if (isset($_POST['SEMTrainDays'])) { $SEMTrainDays = $_POST['SEMTrainDays']; } else { $SEMTrainDays = null;}

//DPA
$chkIncludeDPA = isset($_POST['chkIncludeDPA']) ? 1 : 0;
if (isset($_POST['DPADays'])) { $DPADays = $_POST['DPADays']; } else { $DPADays = null;}
if (isset($_POST['DPATrainDays'])) { $DPATrainDays = $_POST['DPATrainDays']; } else { $DPATrainDays = null;}
if (isset($_POST['DPASize'])) { $DPASize = $_POST['DPASize']; } else { $DPASize = null;}

//WHD
$chkIncludeWHD = isset($_POST['chkIncludeWHD']) ? 1 : 0;
if (isset($_POST['WHDDays'])) { $WHDDays = $_POST['WHDDays']; } else { $WHDDays = null;}
if (isset($_POST['WHDTrainDays'])) { $WHDTrainDays = $_POST['WHDTrainDays']; } else { $WHDTrainDays = null;}
if (isset($_POST['WHDSize'])) { $WHDSize = $_POST['WHDSize']; } else { $WHDSize = null;}

//Patch Manager
$chkIncludePM = isset($_POST['chkIncludePM']) ? 1 : 0;
if (isset($_POST['PMDays'])) { $PMDays = $_POST['PMDays']; } else { $PMDays = null;}
if (isset($_POST['PMTrainDays'])) { $PMTrainDays = $_POST['PMTrainDays']; } else { $PMTrainDays = null;}

//ARM
$chkIncludeARM = isset($_POST['chkIncludeARM']) ? 1 : 0;
if (isset($_POST['ARMDays'])) { $ARMDays = $_POST['ARMDays']; } else { $ARMDays = null;}
if (isset($_POST['ARMTrainDays'])) { $ARMTrainDays = $_POST['ARMTrainDays']; } else { $ARMTrainDays = null;}

//Scalability
$chkIncludeAPEs = isset($_POST['chkIncludeAPEs']) ? 1 : 0;
if (isset($_POST['APEDays'])) { $APEDays = $_POST['APEDays']; } else { $APEDays = null;}
$chkIncludeAWSs = isset($_POST['chkIncludeAWSs']) ? 1 : 0;
if (isset($_POST['AWSDays'])) { $AWSDays = $_POST['AWSDays']; } else { $AWSDays = null;}
$chkIncludeHA = isset($_POST['chkIncludeHA']) ? 1 : 0;
if (isset($_POST['HADays'])) { $HADays = $_POST['HADays']; } else { $HADays = null;}

//Ancillary
$chkIncludeNTM = isset($_POST['chkIncludeNTM']) ? 1 : 0;
if (isset($_POST['NTMDays'])) { $NTMDays = $_POST['NTMDays']; } else { $NTMDays = null;}
$chkIncludeKiwi = isset($_POST['chkIncludeKiwi']) ? 1 : 0;
if (isset($_POST['KiwiDays'])) { $KiwiDays = $_POST['KiwiDays']; } else { $KiwiDays = null;}
$chkIncludeDW = isset($_POST['chkIncludeDW']) ? 1 : 0;
if (isset($_POST['DWDays'])) { $DWDays = $_POST['DWDays']; } else { $DWDays = null;}
$chkIncludeServU = isset($_POST['chkIncludeServU']) ? 1 : 0;
if (isset($_POST['ServUDays'])) { $ServUDays = $_POST['ServUDays']; } else { $ServUDays = null;}
$chkIncludeEOC = isset($_POST['chkIncludeEOC']) ? 1 : 0;
if (isset($_POST['EOCDays'])) { $EOCDays = $_POST['EOCDays']; } else { $EOCDays = null;}
if (isset($_POST['APITrainDays'])) { $APITrainDays = $_POST['APITrainDays']; } else { $APITrainDays = null;}
$chkIncludeAPM = isset($_POST['chkIncludeAPM']) ? 1 : 0;


//License Sizes
if (isset($_POST['APMDays'])) { $APMDays = $_POST['APMDays']; } else { $APMDays = null;}
if (isset($_POST['numAPEsInstalled'])) { $numAPEsInstalled = $_POST['numAPEsInstalled']; } else { $numAPEsInstalled = null;}
if (isset($_POST['numAWSsInstalled'])) { $numAWSsInstalled = $_POST['numAWSsInstalled']; } else { $numAWSsInstalled = null;}
if (isset($_POST['numHAInstalled'])) { $numHAInstalled = $_POST['numHAInstalled']; } else { $numHAInstalled = null;}
if (isset($_POST['numAPEsToInstall'])) { $numAPEsToInstall = $_POST['numAPEsToInstall']; } else { $numAPEsToInstall = null;}
if (isset($_POST['numAWSsToInstall'])) { $numAWSsToInstall = $_POST['numAWSsToInstall']; } else { $numAWSsToInstall = null;}
if (isset($_POST['numHAToInstall'])) { $numHAToInstall = $_POST['numAWSsToInstall']; } else { $numAWSsToInstall = null;}
if (isset($_POST['numDPA'])) { $numDPA = $_POST['numDPA']; } else { $numDPA = null;}
if (isset($_POST['numWHD'])) { $numWHD = $_POST['numWHD']; } else { $numWHD = null;}
if (isset($_POST['NPMSize'])) { $NPMSize = $_POST['NPMSize']; } else {$NPMSize = null; } 
if (isset($_POST['NTASize'])) { $NTASize = $_POST['NTASize']; } else {$NTASize = "None"; } 
if (isset($_POST['NCMSize'])) { $NCMSize = $_POST['NCMSize']; } else {$NCMSize = "None"; } 
if (isset($_POST['SAMSize'])) { $SAMSize = $_POST['SAMSize']; } else {$SAMSize = "None"; } 
if (isset($_POST['VNQMSize'])) { $VNQMSize = $_POST['VNQMSize']; } else {$VNQMSize = "None"; } 
if (isset($_POST['UDTSize'])) { $UDTSize = $_POST['UDTSize']; } else {$UDTSize = "None"; } 
if (isset($_POST['IPAMSize'])) { $IPAMSize = $_POST['IPAMSize']; } else {$IPAMSize = "None"; } 
if (isset($_POST['WPMSize'])) { $WPMSize = $_POST['WPMSize']; } else {$WPMSize = "None"; } 
if (isset($_POST['VMANSize'])) { $VMANSize = $_POST['VMANSize']; } else {$VMANSize = "None"; } 
if (isset($_POST['SRMSize'])) { $SRMSize = $_POST['SRMSize']; } else {$SRMSize = "None"; } 
if (isset($_POST['LASize'])) { $LASize = $_POST['LASize']; } else {$LASize = "None"; } 
if (isset($_POST['SCMSize'])) { $SCMSize = $_POST['SCMSize']; } else {$SCMSize = "None"; } 
if (isset($_POST['SEMSize'])) { $SEMSize = $_POST['SEMSize']; } else {$SEMSize = "None"; } 
if (isset($_POST['PMSize'])) { $PMSize = $_POST['PMSize']; } else {$PMSize = "None"; } 
if (isset($_POST['ARMSize'])) { $ARMSize = $_POST['ARMSize']; } else {$ARMSize = "None"; } 

//Current Install Base checks
$chkNPMInstalled = isset($_POST['chkNPMInstalled']) ? 1 : 0;
$chkNTAInstalled = isset($_POST['chkNTAInstalled']) ? 1 : 0;
$chkNCMInstalled = isset($_POST['chkNCMInstalled']) ? 1 : 0;
$chkSAMInstalled = isset($_POST['chkSAMInstalled']) ? 1 : 0;
$chkIPAMInstalled = isset($_POST['chkIPAMInstalled']) ? 1 : 0;
$chkUDTInstalled = isset($_POST['chkUDTInstalled']) ? 1 : 0;
$chkVNQMInstalled = isset($_POST['chkVNQMInstalled']) ? 1 : 0;
$chkWPMInstalled = isset($_POST['chkWPMInstalled']) ? 1 : 0;
$chkVMANInstalled = isset($_POST['chkVMANInstalled']) ? 1 : 0;
$chkSRMInstalled = isset($_POST['chkSRMInstalled']) ? 1 : 0;
$chkLAInstalled = isset($_POST['chkLAInstalled']) ? 1 : 0;
$chkSCMInstalled = isset($_POST['chkSCMInstalled']) ? 1 : 0;
$chkSEMInstalled = isset($_POST['chkSEMInstalled']) ? 1 : 0;
$chkDPAInstalled = isset($_POST['chkDPAInstalled']) ? 1 : 0;
$chkWHDInstalled = isset($_POST['chkWHDInstalled']) ? 1 : 0;
$chkPMInstalled = isset($_POST['chkPMInstalled']) ? 1 : 0;
$chkARMInstalled = isset($_POST['chkARMInstalled']) ? 1 : 0;


?>