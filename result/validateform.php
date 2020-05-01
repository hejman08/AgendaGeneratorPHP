<?php
function validateForm() {
    $validated = 1;
    global $EngagementType, $isOrionEng;
    global $Day1Bits;
    global $NPMSize;
    global $NPMDays, $NPMTrainDays, $NPMSize, $chkIncludeNPM;
    global $NCMDays, $NCMTrainDays, $NCMSize, $chkIncludeNCM;
    global $NTADays, $NTATrainDays, $NTASize, $chkIncludeNTA;
    global $SAMDays, $SAMTrainDays, $SAMSize, $chkIncludeSAM;
    global $IPAMDays, $IPAMTrainDays, $IPAMSize, $chkIncludeIPAM;
    global $UDTDays, $UDTTrainDays, $UDTSize, $chkIncludeUDT;
    global $VNQMDays, $VNQMTrainDays, $VNQMSize, $chkIncludeVNQM;
    global $WPMDays, $WPMTrainDays, $WPMSize, $chkIncludeWPM;
    global $SRMDays, $SRMTrainDays, $SRMSize, $chkIncludeSRM;
    global $VMANDays, $VMANTrainDays, $VMANSize, $chkIncludeVMAN;
    global $SCMDays, $SCMTrainDays, $SCMSize, $chkIncludeSCM;
    global $LADays, $LATrainDays, $LASize, $chkIncludeLA;
    global $SEMDays, $SEMTrainDays, $SEMSize, $chkIncludeSEM;
    global $WHDDays, $WHDTrainDays, $WHDSize, $chkIncludeWHD;
    global $PMDays, $PMTrainDays, $PMSize, $chkIncludePM;
    global $ARMDays, $ARMTrainDays, $ARMSize, $chkIncludeARM;
    global $DPADays, $DPATrainDays, $DPASize, $chkIncludeDPA;
    global $numAPEs, $chkIncludeAPEs, $chkIncludeAWSs, $APEDays, $AWSDays, $numAWSs;

    global $ErrorMsg;

    //User didn't enter an engagement type
    if ($EngagementType == "None") {
        $ErrorMsg .= "No Engagement Type Selected";
        $validated = 0;
    } 
    
    //User picked a kind of engagement that requires "Non-HC Day 1 Bits" but didn't fill in that area
    if ($Day1Bits < 0.5) {  
        switch($EngagementType) {
            case "NewBuild":
            case "Rebuild":
            case "DBMigration":
            case "EngineMigration":
                $ErrorMsg .= "No Day 1 Bits filled out for this engagement";
                $validated = 0;
                break;
            default:
                break;
        }
    }
    //user filled in day counts but didn't provide a license size for an engagement type that makes server specs
    
    if ($EngagementType == "Rebuild" || $EngagementType == "Migration and Upgrade - Engines Only" || $EngagementType == "Migration and Upgrade - DB and Engines" || $EngagementType == "NewBuild" )
    {
        if ($NPMSize == "None" && ($chkIncludeNPM == 1 || $NPMDays > 0 || $NPMTrainDays > 0))
        {
            $ErrorMsg .= "NPM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($NCMSize == "None" && ($chkIncludeNCM == 1 || $NCMDays > 0 || $NCMTrainDays > 0))
        {
            $ErrorMsg .= "NCM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($NTASize == "None" && ($chkIncludeNTA == 1 || $NTADays > 0 || $NTATrainDays > 0))
        {
            $ErrorMsg .= "NTA missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($SAMSize == "None" && ($chkIncludeSAM == 1 || $SAMDays > 0 || $SAMTrainDays > 0))
        {
            $ErrorMsg .= "SAM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($IPAMSize == "None" && ($chkIncludeIPAM == 1 || $IPAMDays > 0 || $IPAMTrainDays > 0))
        {
            $ErrorMsg .= "IPAM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($UDTSize == "None" && ($chkIncludeUDT == 1 || $UDTDays > 0 || $UDTTrainDays > 0))
        {
            $ErrorMsg .= "UDT missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($VNQMSize == "None" && ($chkIncludeVNQM == 1 || $VNQMDays > 0 || $VNQMTrainDays > 0))
        {
            $ErrorMsg .= "VNQM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($WPMSize == "None" && ($chkIncludeWPM == 1 || $WPMDays > 0 || $WPMTrainDays > 0))
        {
            $ErrorMsg .= "WPM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($SRMSize == "None" && ($chkIncludeSRM == 1 || $SRMDays > 0 || $SRMTrainDays > 0))
        {
            $ErrorMsg .= "SRM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($LASize == "None" && ($chkIncludeLA == 1 || $LADays > 0 || $LATrainDays > 0))
        {
            $ErrorMsg .= "LA missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($VMANSize == "None" && ($chkIncludeVMAN == 1 || $VMANDays > 0 || $VMANTrainDays > 0))
        {
            $ErrorMsg .= "VMAN missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($SCMSize == "None" && ($chkIncludeSCM == 1 || $SCMDays > 0 || $SCMTrainDays > 0))
        {
            $ErrorMsg .= "SCM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($SEMSize == "None" && ($chkIncludeSEM == 1 || $SEMDays > 0 || $SEMTrainDays > 0))
        {
            $ErrorMsg .= "SEM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($PMSize == "None" && ($chkIncludePM == 1 || $PMDays > 0 || $PMTrainDays > 0))
        {
            $ErrorMsg .= "PM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($ARMSize == "None" && ($chkIncludeARM == 1 || $ARMDays > 0 || $ARMTrainDays > 0))
        {
            $ErrorMsg .= "ARM missing a license size for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($DPASize < 1 && ($chkIncludeDPA == 1 || $DPADays > 0 || $DPATrainDays > 0))
        {
            $ErrorMsg .= "DPA missing a count of instances for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($WHDSize < 1 && ($chkIncludeWHD == 1 || $WHDDays > 0 || $WHDTrainDays > 0))
        {
            $ErrorMsg .= "WHD missing a count of instances for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($numAPEs < 1 && ($chkIncludeAPEs == 1 || $APEDays > 0))
        {
            $ErrorMsg .= "Number of APEs missing for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
        if ($numAWSs < 1 && ($chkIncludeAWSs == 1 || $AWSDays > 0))
        {
            $ErrorMsg .= "Number of AWS missing for " . $EngagementType . " engagement\n";
            $validated = 0;
        }
    }

    return $validated;
    
}
?>
