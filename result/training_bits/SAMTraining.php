<?php 
global $SAMTrainDays;
if ($SAMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($SAMTrainDays, "SAM User Training") . "</h2>\n"
        . "<h3>SAM Training Topics</h3>\n"
        . "<ul><li>Working with application monitor templates</li>\n"
        . "<ul><li>Understanding SAM credentials</li>\n"
        . "<li>Creating and editing templates</li>\n"
        . "<li>Understanding component monitor types</li>\n"
        . "<ul><li>Windows service monitor</li>\n"
        . "<li>Performance counter monitor</li>\n"
        . "<li>User experience monitors</li>\n"
        . "<li>TCP monitors</li>\n"
        . "<li>Linux/Unix/Windows(PowerShell) script monitors</li></ul></ul>\n"
        . "<li>Browsing for processes, services and performance counters</li>\n"
        . "<li>Manually assigning templates</li>\n"
        . "<li>App Insight templates</li>\n"
        . "<ul><li>AppInsight for MS SQL</li>\n"
        . "<li>AppInsight for IIS</li>\n"
        . "<li>AppInsight for MS Exchange</li>\n"
        . "<li>AppInsight for Active Directory</li></ul>\n"
        . "<li>Real-time process explorer</li>\n"
        . "<li>Service control manager</li>\n"
        . "<li>Real-time event log viewer</li>\n"
        . "<li>Application discovery</li>\n"
        . "<li>Application detail views</li>\n"
        . "<li>Application dependencies</li>\n"
        . "<li>Cloud infrastructure monitoring</li>\n"
        . "<li>Asset inventory</li>\n"
        . "<li>Configuring warning and critical thresholds</li>\n"

        . "</ul>";
    }
?>