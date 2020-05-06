<?php 
global $SAMTrainDays;
if ($SAMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($SAMTrainDays, "SAM User Training") . "</h2>\n";
        $html .= "<h3>SAM Training Topics</h3>\n";
        $html .= "<ul><li>Working with application monitor templates</li>\n";
        $html .= "<ul><li>Understanding SAM credentials</li>\n";
        $html .= "<li>Creating and editing templates</li>\n";
        $html .= "<li>Understanding component monitor types</li>\n";
        $html .= "<ul><li>Windows service monitor</li>\n";
        $html .= "<li>Performance counter monitor</li>\n";
        $html .= "<li>User experience monitors</li>\n";
        $html .= "<li>TCP monitors</li>\n";
        $html .= "<li>Linux/Unix/Windows(PowerShell) script monitors</li></ul></ul>\n";
        $html .= "<li>Browsing for processes, services and performance counters</li>\n";
        $html .= "<li>Manually assigning templates</li>\n";
        $html .= "<li>App Insight templates</li>\n";
        $html .= "<ul><li>AppInsight for MS SQL</li>\n";
        $html .= "<li>AppInsight for IIS</li>\n";
        $html .= "<li>AppInsight for MS Exchange</li>\n";
        $html .= "<li>AppInsight for Active Directory</li></ul>\n";
        $html .= "<li>Real-time process explorer</li>\n";
        $html .= "<li>Service control manager</li>\n";
        $html .= "<li>Real-time event log viewer</li>\n";
        $html .= "<li>Application discovery</li>\n";
        $html .= "<li>Application detail views</li>\n";
        $html .= "<li>Application dependencies</li>\n";
        $html .= "<li>Cloud infrastructure monitoring</li>\n";
        $html .= "<li>Asset inventory</li>\n";
        $html .= "<li>Configuring warning and critical thresholds</li>\n";

        $html .= "</ul>";
    }
?>