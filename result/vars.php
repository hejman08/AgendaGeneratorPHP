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
global $API200;
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

if (isset($_POST['APITraining'])) { $API200 = $_POST['APITraining']; } else { $APITrainingDays = null;}

//NPM
$chkIncludeNPM = isset($_POST['chkIncludeNPM']) ? 1 : 0;
if (isset($_POST['NPMDays'])) { $NPMDays = $_POST['NPMDays']; } else { $NPMDays = null;}
if (isset($_POST['NPM100'])) { $NPM100 = $_POST['NPM100']; } else { $NPM100 = null;}
if (isset($_POST['NPM200'])) { $NPM200 = $_POST['NPM200']; } else { $NPM200 = null;}

//NCM
$chkIncludeNCM = isset($_POST['chkIncludeNCM']) ? 1 : 0;
if (isset($_POST['NCMDays'])) { $NCMDays = $_POST['NCMDays']; } else { $NCMDays = null;}
if (isset($_POST['NCM100'])) { $NCM100 = $_POST['NCM100']; } else { $NCM100 = null;}
if (isset($_POST['NCM200'])) { $NCM200 = $_POST['NCM200']; } else { $NCM200 = null;}

//NTA
$chkIncludeNTA = isset($_POST['chkIncludeNTA']) ? 1 : 0;
if (isset($_POST['NTADays'])) { $NTADays = $_POST['NTADays']; } else { $NTADays = null;}
if (isset($_POST['NTA200'])) { $NTA200 = $_POST['NTA200']; } else { $NTA200 = null;}

//SAM
$chkIncludeSAM = isset($_POST['chkIncludeSAM']) ? 1 : 0;
if (isset($_POST['SAMDays'])) { $SAMDays = $_POST['SAMDays']; } else { $SAMDays = null;}
if (isset($_POST['SAM100'])) { $SAM100 = $_POST['SAM100']; } else { $SAM100 = null;}
if (isset($_POST['SAM200'])) { $SAM200 = $_POST['SAM200']; } else { $SAM200 = null;}

//IPAM
$chkIncludeIPAM = isset($_POST['chkIncludeIPAM']) ? 1 : 0;
if (isset($_POST['IPAMDays'])) { $IPAMDays = $_POST['IPAMDays']; } else { $IPAMDays = null;}
if (isset($_POST['IPAM200'])) { $IPAM200 = $_POST['IPAM200']; } else { $IPAM200 = null;}

//UDT
$chkIncludeUDT = isset($_POST['chkIncludeUDT']) ? 1 : 0;
if (isset($_POST['UDTDays'])) { $UDTDays = $_POST['UDTDays']; } else { $UDTDays = null;}
if (isset($_POST['UDT200'])) { $UDT200 = $_POST['UDT200']; } else { $UDT200 = null;}

//VNQM
$chkIncludeVNQM = isset($_POST['chkIncludeVNQM']) ? 1 : 0;
if (isset($_POST['VNQMDays'])) { $VNQMDays = $_POST['VNQMDays']; } else { $VNQMDays = null;}
if (isset($_POST['VNQM200'])) { $VNQM200 = $_POST['VNQM200']; } else { $VNQM200 = null;}

//WPM
$chkIncludeWPM = isset($_POST['chkIncludeWPM']) ? 1 : 0;
if (isset($_POST['WPMDays'])) { $WPMDays = $_POST['WPMDays']; } else { $WPMDays = null;}
if (isset($_POST['WPM200'])) { $WPM200 = $_POST['WPM200']; } else { $WPM200 = null;}

//VMAN
$chkIncludeVMAN = isset($_POST['chkIncludeVMAN']) ? 1 : 0;
if (isset($_POST['VMANDays'])) { $VMANDays = $_POST['VMANDays']; } else { $VMANDays = null;}
if (isset($_POST['VMAN200'])) { $VMAN200 = $_POST['VMAN200']; } else { $VMAN200 = null;}

//SRM
$chkIncludeSRM = isset($_POST['chkIncludeSRM']) ? 1 : 0;
$chkSRMProfiler = isset($_POST['chkSRMProfiler']) ? 1 : 0;
if (isset($_POST['SRMDays'])) { $SRMDays = $_POST['SRMDays']; } else { $SRMDays = null;}
if (isset($_POST['SRM200'])) { $SRM200 = $_POST['SRM200']; } else { $SRM200 = null;}

//LA
$chkIncludeLA = isset($_POST['chkIncludeLA']) ? 1 : 0;
if (isset($_POST['LADays'])) { $LADays = $_POST['LADays']; } else { $LADays = null;}
if (isset($_POST['LA200'])) { $LA200 = $_POST['LA200']; } else { $LA200 = null;}

//SCM
$chkIncludeSCM = isset($_POST['chkIncludeSCM']) ? 1 : 0;
if (isset($_POST['SCMDays'])) { $SCMDays = $_POST['SCMDays']; } else { $SCMDays = null;}
if (isset($_POST['SCM200'])) { $SCM200 = $_POST['SCM200']; } else { $SCM200 = null;}

//SEM
$chkIncludeSEM = isset($_POST['chkIncludeSEM']) ? 1 : 0;
if (isset($_POST['SEMDays'])) { $SEMDays = $_POST['SEMDays']; } else { $SEMDays = null;}
if (isset($_POST['SEM200'])) { $SEM200 = $_POST['SEM200']; } else { $SEM200 = null;}

//DPA
$chkIncludeDPA = isset($_POST['chkIncludeDPA']) ? 1 : 0;
if (isset($_POST['DPADays'])) { $DPADays = $_POST['DPADays']; } else { $DPADays = null;}
if (isset($_POST['DPA200'])) { $DPA200 = $_POST['DPA200']; } else { $DPA200 = null;}
if (isset($_POST['DPASize'])) { $DPASize = $_POST['DPASize']; } else { $DPASize = null;}

//WHD
$chkIncludeWHD = isset($_POST['chkIncludeWHD']) ? 1 : 0;
if (isset($_POST['WHDDays'])) { $WHDDays = $_POST['WHDDays']; } else { $WHDDays = null;}
if (isset($_POST['WHD200'])) { $WHD200 = $_POST['WHD200']; } else { $WHD200 = null;}
if (isset($_POST['WHDSize'])) { $WHDSize = $_POST['WHDSize']; } else { $WHDSize = null;}

//Patch Manager
$chkIncludePM = isset($_POST['chkIncludePM']) ? 1 : 0;
if (isset($_POST['PMDays'])) { $PMDays = $_POST['PMDays']; } else { $PMDays = null;}
if (isset($_POST['PM200'])) { $PM200 = $_POST['PM200']; } else { $PM200 = null;}

//ARM
$chkIncludeARM = isset($_POST['chkIncludeARM']) ? 1 : 0;
if (isset($_POST['ARMDays'])) { $ARMDays = $_POST['ARMDays']; } else { $ARMDays = null;}
if (isset($_POST['ARM200'])) { $ARM200 = $_POST['ARM200']; } else { $ARM200 = null;}

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
if (isset($_POST['API200'])) { $API200 = $_POST['API200']; } else { $API200 = null;}
$chkIncludeAPM = isset($_POST['chkIncludeAPM']) ? 1 : 0;


//License Sizes
if (isset($_POST['APMDays'])) { $APMDays = $_POST['APMDays']; } else { $APMDays = null;}
if (isset($_POST['numAPEsInstalled'])) { $numAPEsInstalled = $_POST['numAPEsInstalled']; } else { $numAPEsInstalled = null;}
if (isset($_POST['numAWSsInstalled'])) { $numAWSsInstalled = $_POST['numAWSsInstalled']; } else { $numAWSsInstalled = null;}
if (isset($_POST['numHAInstalled'])) { $numHAInstalled = $_POST['numHAInstalled']; } else { $numHAInstalled = null;}
if (isset($_POST['numAPEsToInstall'])) { $numAPEsToInstall = $_POST['numAPEsToInstall']; } else { $numAPEsToInstall = null;}
if (isset($_POST['numAWSsToInstall'])) { $numAWSsToInstall = $_POST['numAWSsToInstall']; } else { $numAWSsToInstall = null;}
if (isset($_POST['numHAToInstall'])) { $numHAToInstall = $_POST['numHAToInstall']; } else { $numHAToInstall = null;}
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