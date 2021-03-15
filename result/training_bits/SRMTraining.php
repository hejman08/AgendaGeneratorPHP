<?php 
global $SRMTrainDays;
if ($SRMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($SRMTrainDays, "SRM User Training") . "</h2>\n"
        . "<h3>SRM Training Topics</h3>\n"
        . "<ul><li>SRM Prerequisites</li>\n"
        . "<li>Adding and removing devices</li>\n"
        . "<ul><li>SMI-S Providers and API Polling</li>\n"
        . "<li>SRM Orion vs SRM Profiler</li>\n"
        . "<ul><li>Supported storage arrays</li>\n"
        . "<li>Fibre Channel Switches (Profiler only)</li></ul>\n"
        . "<li>Understanding Device Grouping</li>\n"
        . "<ul><li>Groups</li>\n"
        . "<li>Custom Properties</li></ul>\n"
        . "<li>Creating and Managing Users</li>\n"
        . "<li>Monitoring with SRM</li>\n"
        . "<ul><li>Storage Pools</li>\n"
        . "<li>LUNs</li>\n"
        . "<li>NAS</li>\n"
        . "<li>CIFS</li></ul>\n"
        . "<li>Alerting</li>\n"
        . "<li>Reporting</li>\n"
        . "</ul>"
        . "</ul>";
    }
?>