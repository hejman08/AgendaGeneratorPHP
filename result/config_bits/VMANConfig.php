<?php 
global $VMANDays;
if ($VMANDays > 0)
    {
        $html .= "<h2>" . dayHeader($VMANDays, "VMAN Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>VMAN Configuration Tasks</h3>\n";
        $html .= "<ul><li>Validation/Configuration of credentials </li>\n";
        $html .= "<li>Import of vCenter(s)/ESX hosts</li>\n";
        $html .= "<li>Import of Hyper-V hosts</li>\n";
        $html .= "<li>Configuration of Alerts</li>\n";
        $html .= "<li>Defining Thresholds</li>\n";
        $html .= "<ul><li>Global Thresholds</li>\n";
        $html .= "<li>Individual Thresholds</li>\n";
        $html .= "<ul><li>Cluster</li>\n";
        $html .= "<li>Host</li>\n";
        $html .= "<li>VM</li></ul></ul>\n";
        $html .= "<li>Overview of added view resources</li>\n";
        $html .= "<ul><li>VM / Host Resource Utilization</li>\n";
        $html .= "<li>Potential Virtualization Issues</li>\n";
        $html .= "<li>Orphaned VMDKs</li></ul>\n";
        $html .= "<li>Using the Recommendations Engine</li>\n";
        $html .= "<li>Capacity Planning Wizard</li>\n";
        $html .= "<li>Sprawl Overview</li>\n";
        $html .= "<li>AppStack Overview</li>\n";
        $html .= "<li>PerfStack Overview</li>\n";
        $html .= "</ul>";
    }
?>