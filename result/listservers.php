<?php 
function listServers() {
    global $isOrionEng;
    global $hasAPE, $hasAWS, $hasNPM, $chkSRMProfiler, $hasEOC, $hasDPA, $hasPM, $hasSEM, $hasDW, $hasWHD, $hasWPM, $hasKiwi, $hasARM, $numAPEs, $numAWSs;
    $servers = null;
    //figure out which $servers are going to be needed for the other various bits here.
    $servers .= "<ul>";

    if ($isOrionEng == 1) {
        $servers .= "<li>Orion Core Application Server</li>";
    }
    if ($hasAPE == 1) {
        $servers .= "<li>APE Server";
        if ($numAPEs > 1) {
            $servers .= "s";
        }
        $servers .= "</li>\n";
    }
    if ($hasAWS == 1) {
        $servers .= "<li>AWS Server";
        if ($numAWSs > 1) {
            $servers .= "s";
        }
        $servers .= "</li>\n";
    }
    if ($hasWPM == true)
    {
        $servers .= "<li>WPM Player Server(s) (if present)</li>\n";
    }
    if ($chkSRMProfiler == true)
    {
        $servers .= "<li>SRM Profiler Server</li>\n";
    }
    if ($isOrionEng == true)
    {
        $servers .= "<li>Orion Core Application MS SQL Server</li>\n";
    }
    if ($hasEOC == true)
    {
        $servers .= "<li>EOC Server</li>\n";
    }
    if ($hasDPA == true)
    {
        $servers .= "<li>DPA Application Server</li>\n";
        $servers .= "<li>DPA Repository SQL Server</li>\n";
    }
    if ($hasPM == true)
    {
        $servers .= "<li>PM Primary Application Server</li>\n";
        $servers .= "<li>PM Automation Role Server(s) (if present)</li>\n";
    }
    if ($hasSEM == true)
    {
        $servers .= "<li>SEM Virtual Appliance Host Server</li>\n";
    }
    // if ($hasMA == true)
    // {
    //     $servers .= "<li>MA Application Server</li>\n";
    // }
    if ($hasDW == true)
    {
        $servers .= "<li>DW Server(s)</li>\n";
    }
    if ($hasKiwi == true)
    {
        $servers .= "<li>Kiwi Syslog Server</li>\n";
    }
    if ($hasWHD == true)
    {
        $servers .= "<li>WHD Application and Database Server(s)</li>\n";
    }
    if ($hasARM == true)
    {
        $servers .= "<li>ARM Application and Database Server(s)</li>\n";
    }

    $servers .="</ul>\n";
    return $servers;
}
?>
