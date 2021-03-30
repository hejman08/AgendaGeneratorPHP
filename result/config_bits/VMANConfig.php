<?php 
global $VMANDays;
if ($VMANDays > 0)
    {
        $html .= "<h2>" . dayHeader($VMANDays, "VMAN Best Practices Configuration") . "</h2>\n"
       
        . "<h3>VMAN Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Validation/Configuration of credentials</li>\n"
        . "<li>Import of vCenter(s)/ESX hosts</li>\n"
        . "<li>Import of Hyper-V hosts</li>\n"
        . "<li>Configuration of Alerts</li>\n"
        . "<li>Defining Thresholds</li>\n"
        . "<ul>\n"
        . "<li>Global Thresholds</li>\n"
        . "<li>Individual Thresholds</li>\n"
        . "<ul>\n"
        . "<li>Cluster</li>\n"
        . "<li>Host</li>\n"
        . "<li>VM</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>VMAN Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Capacity Planning Reports</li>\n"
        . "<ul>\n"
        . "<li>Report creation</li>\n"
        . "</ul>\n"
        . "<li>PerfStack integration</li>\n"
        . "</ul>\n";
        
    }
?>