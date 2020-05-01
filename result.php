<html>
    <head>
        <link rel="stylesheet" href="output.css">
    </head>
<body>
<?php
//includes and "pre-work" stuff
$html = null;

$GLOBALS['ErrorMsg'] = null; //will change in the vars file mainly, if the user didn't enter something on the form.

include_once ("result/vars.php"); //built an entire sub-file for POST variables because good gods are there a lot in this form.
include_once ("result/validateform.php");
include_once ("result/modules.php"); //File that determines modules/acronyms/boolean if it's an Orion engagement, and boolean if it has Network Modules
include_once ("result/serverspecs.php"); //PHP function that will return specs for all needed servers when called, based on choices on the form
include_once ("result/dayheader.php"); //PHP function that will look at the Rolling Day Count (RDC) and return an appropriate Header for that day when called
include_once ("result/serverspecs.php"); //contains PHP function for generating server specs. Or at least it will once the rest of this works.
include_once ("result/intros.php"); //contains intro paragraphs for different engagement types
include_once ("result/day1bits.php");
include_once ("result/listservers.php");

$formValidated = validateForm();

if ($formValidated == 1) {
    if ($GLOBALS['EngagementType'] != "SpecsOnly") 
    {     
            $html = "<h1>Project Overview</h1>";
            $html .= introPara();
            $html .= "<h1>SolarWinds Software List & Acronyms</h1>";
            $html .= $acronyms;
            if ($GLOBALS['NeedsSpecs'] == 1) {
                $html .= serverSpecs();
            }
            $html .= day1Bits();
            include_once ("result/config_bits/NPMConfig.php");
            include_once ("result/config_bits/NCMConfig.php");
            include_once ("result/config_bits/NTAConfig.php");
            include_once ("result/config_bits/SAMConfig.php");
            include_once ("result/config_bits/DPAConfig.php");
            include_once ("result/config_bits/IPAMConfig.php");
            include_once ("result/config_bits/UDTConfig.php");
            include_once ("result/config_bits/VNQMConfig.php");
            include_once ("result/config_bits/WPMConfig.php");
            include_once ("result/config_bits/SCMConfig.php");
            include_once ("result/config_bits/SRMConfig.php");
            include_once ("result/config_bits/VMANConfig.php");
            include_once ("result/config_bits/APEConfig.php");
            include_once ("result/config_bits/AWSConfig.php");
            include_once ("result/config_bits/HAConfig.php");
            include_once ("result/config_bits/LAConfig.php");
            include_once ("result/config_bits/NTMConfig.php");
            include_once ("result/config_bits/EOCConfig.php");
            include_once ("result/config_bits/PMConfig.php");
            include_once ("result/config_bits/KiwiConfig.php");
            include_once ("result/config_bits/SEMConfig.php");
            include_once ("result/config_bits/ServUConfig.php");
            include_once ("result/config_bits/DWConfig.php");
            include_once ("result/config_bits/WHDConfig.php");
            include_once ("result/config_bits/ARMConfig.php");
            include_once ("result/config_bits/APMConfig.php");
            include_once ("result/config_bits/AsBuilt.php");
            include_once ("result/config_bits/AdminKT.php");

    }
    else {
        //server specs only
        $html .= serverSpecs();
    }
}
if ($GLOBALS['ErrorMsg'] != null) // you done messed up A-A-ron.
{
    $html = "<h1>Error(s) Encountered</h1>";
    $html .="Please resolve the following errors to continue.<ul>";
    $html .= $GLOBALS['ErrorMsg'];
}

    echo $html;
?>
</body>