<?php 
global $VMAN200;
if ($VMAN200 > 0)
    {
        $html .= "<h2>" . dayHeader($VMAN200, "VMAN Admin Training") . "</h2>\n"
        . "<h3>VMAN Training Topics</h3>\n"
        . "<ul><li>Import of vCenter(s)/ESX hosts</li>\n"
        . "<li>Import of Hyper-V hosts</li>\n"
        . "<li>Configuration of Alerts</li>\n"
        . "<li>Defining Thresholds</li>\n"
        . "<ul><li>Global Thresholds</li>\n"
        . "<li>Individual Thresholds</li>\n"
        . "<ul><li>Cluster</li>\n"
        . "<li>Host</li>\n"
        . "<li>VM</li></ul></ul>\n"
        . "<li>Overview of added view resources</li>\n"
        . "<ul><li>VM / Host Resource Utilization</li>\n"
        . "<li>Potential Virtualization Issues</li>\n"
        . "<li>Orphaned VMDKs</li></ul>\n"
        . "<li>Using the Recommendations Engine</li>\n"
        . "<li>Capacity Planning Wizard</li>\n"
        . "<li>Sprawl Overview</li>\n"
        . "<li>AppStack Overview</li>\n"
        . "<li>PerfStack Overview</li>\n"

        . "</ul>";
    }
?>