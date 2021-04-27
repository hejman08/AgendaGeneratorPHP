<?php
function validateForm() {
    $validated = 1;
    global $EngagementType, $isOrionEng;
    global $Day1Bits;
    global $NPMSize;
    global $NPMDays, $NPM100, $NPM200, $NPMSize, $chkIncludeNPM;
    global $NCMDays, $NCM100, $NCM200, $NCMSize, $chkIncludeNCM;
    global $NTADays, $NTA200, $NTASize, $chkIncludeNTA;
    global $SAMDays, $SAM100, $SAM200, $SAMSize, $chkIncludeSAM;
    global $IPAMDays, $IPAM200, $IPAMSize, $chkIncludeIPAM;
    global $UDTDays, $UDT200, $UDTSize, $chkIncludeUDT;
    global $VNQMDays, $VNQM200, $VNQMSize, $chkIncludeVNQM;
    global $WPMDays, $WPM200, $WPMSize, $chkIncludeWPM;
    global $SRMDays, $SRM200, $SRMSize, $chkIncludeSRM;
    global $VMANDays, $VMAN200, $VMANSize, $chkIncludeVMAN;
    global $SCMDays, $SCM200, $SCMSize, $chkIncludeSCM;
    global $LADays, $LA200, $LASize, $chkIncludeLA;
    global $SEMDays, $SEM200, $SEMSize, $chkIncludeSEM;
    global $WHDDays, $WHD200, $numWHD, $chkIncludeWHD;
    global $PMDays, $PM200, $PMSize, $chkIncludePM;
    global $ARMDays, $ARM200, $ARMSize, $chkIncludeARM;
    global $DPADays, $DPA200, $numDPA, $chkIncludeDPA;
    global $numAPEsInstalled, $numAPEsToInstall, $chkIncludeAPEs, $chkIncludeAWSs, $APEDays, $AWSDays, $numAWSsInstalled,$numAWSsToInstall;

    global $ErrorMsg;

    //User didn't enter an engagement type
    if ($EngagementType == "None") {
        $ErrorMsg .= "<li>No Engagement Type Selected</li>";
        $validated = 0;
    } 
    
    //User picked a kind of engagement that requires "Non-HC Day 1 Bits" but didn't fill in that area
    if ($Day1Bits < 0.5) {  
        switch($EngagementType) {
            case "NewBuild":
            case "Rebuild":
            case "DBMigration":
            case "EngineMigration":
            case "Upgrade":
                $ErrorMsg .= "<li>No Day 1 Bits filled out for this engagement</li>";
                $validated = 0;
                break;
            default:
                break;
        }
    }
    //user filled in day counts but didn't provide a license size for an engagement type that makes server specs
    
    if ($EngagementType == "Rebuild" || $EngagementType == "DBMigration" || $EngagementType == "EngineMigration" || $EngagementType == "NewBuild" || $EngagementType == "Upgrade")
    {
        if ($NPMSize == "None" && ($chkIncludeNPM == 1 || $NPMDays > 0 || $NPM100 > 0 || $NPM200 > 0))
        {
            $ErrorMsg .= "<li>NPM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($NCMSize == "None" && ($chkIncludeNCM == 1 || $NCMDays > 0 || $NCM100 > 0 || $NCM200 > 0))
        {
            $ErrorMsg .= "<li>NCM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($NTASize == "None" && ($chkIncludeNTA == 1 || $NTADays > 0 || $NTA200 > 0))
        {
            $ErrorMsg .= "<li>NTA missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($SAMSize == "None" && ($chkIncludeSAM == 1 || $SAMDays > 0 || $SAM100 > 0 || $SAM200 > 0))
        {
            $ErrorMsg .= "<li>SAM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($IPAMSize == "None" && ($chkIncludeIPAM == 1 || $IPAMDays > 0 || $IPAM200 > 0))
        {
            $ErrorMsg .= "<li>IPAM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($UDTSize == "None" && ($chkIncludeUDT == 1 || $UDTDays > 0 || $UDT200 > 0))
        {
            $ErrorMsg .= "<li>UDT missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($VNQMSize == "None" && ($chkIncludeVNQM == 1 || $VNQMDays > 0 || $VNQM200 > 0))
        {
            $ErrorMsg .= "<li>VNQM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($WPMSize == "None" && ($chkIncludeWPM == 1 || $WPMDays > 0 || $WPM200 > 0))
        {
            $ErrorMsg .= "<li>WPM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($SRMSize == "None" && ($chkIncludeSRM == 1 || $SRMDays > 0 || $SRM200 > 0))
        {
            $ErrorMsg .= "<li>SRM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($LASize == "None" && ($chkIncludeLA == 1 || $LADays > 0 || $LA200 > 0))
        {
            $ErrorMsg .= "<li>LA missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($VMANSize == "None" && ($chkIncludeVMAN == 1 || $VMANDays > 0 || $VMAN200 > 0))
        {
            $ErrorMsg .= "<li>VMAN missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($SCMSize == "None" && ($chkIncludeSCM == 1 || $SCMDays > 0 || $SCM200 > 0))
        {
            $ErrorMsg .= "<li>SCM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($SEMSize == "None" && ($chkIncludeSEM == 1 || $SEMDays > 0 || $SEM200 > 0))
        {
            $ErrorMsg .= "<li>SEM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($PMSize == "None" && ($chkIncludePM == 1 || $PMDays > 0 || $PM200 > 0))
        {
            $ErrorMsg .= "<li>PM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($ARMSize == "None" && ($chkIncludeARM == 1 || $ARMDays > 0 || $ARM200 > 0))
        {
            $ErrorMsg .= "<li>ARM missing a license size for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($numDPA < 1 && ($chkIncludeDPA == 1 || $DPADays > 0 || $DPA200 > 0))
        {
            $ErrorMsg .= "<li>DPA missing a count of instances for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($numWHD < 1 && ($chkIncludeWHD == 1 || $WHDDays > 0 || $WHD200 > 0))
        {
            $ErrorMsg .= "<li>WHD missing a count of instances for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($numAPEsInstalled < 1 && $numAPEsToInstall < 1 && ($chkIncludeAPEs == 1 || $APEDays > 0))
        {
            $ErrorMsg .= "<li>Number of APEs missing for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
        if ($numAWSsInstalled < 1 && $numAWSsToInstall < 1 && ($chkIncludeAWSs == 1 || $AWSDays > 0))
        {
            $ErrorMsg .= "<li>Number of AWS missing for " . $EngagementType . " engagement</li>";
            $validated = 0;
        }
    }

    return $validated;
    
}
?>
