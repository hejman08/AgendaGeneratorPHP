<?php 
global $SRMTrainDays;
if ($SRMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($SRMTrainDays, "SRM User Training") . "</h2>\n";
        $html .= "<h3>SRM Training Topics</h3>\n";
        $html .= "<ul><li>SRM Prerequisites</li>\n";
        $html .= "<li>Adding and removing devices</li>\n";
        $html .= "<ul><li>SMI-S Providers and API Polling</li>\n";
        $html .= "<li>SRM Orion vs SRM Profiler</li>\n";
        $html .= "<ul><li>Supported storage arrays</li>\n";
        $html .= "<li>Fibre Channel Switches (Profiler only)</li></ul>\n";
        $html .= "<li>Understanding Device Grouping</li>\n";
        $html .= "<ul><li>Groups</li>\n";
        $html .= "<li>Custom Properties</li></ul>\n";
        $html .= "<li>Creating and Managing Users</li>\n";
        $html .= "<li>Monitoring with SRM</li>\n";
        $html .= "<ul><li>Storage Pools</li>\n";
        $html .= "<li>LUNs</li>\n";
        $html .= "<li>NAS</li>\n";
        $html .= "<li>CIFS</li></ul>\n";
        $html .= "<li>Alerting</li>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "</ul>";
        $html .= "</ul>";
    }
?>