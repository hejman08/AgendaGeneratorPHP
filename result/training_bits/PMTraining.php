<?php 
global $PMTrainDays;
if ($PMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($PMTrainDays, "PM User Training") . "</h2>\n";
        $html .= "<h3>PM Training Topics</h3>\n";
        $html .= "<ul><li>Configuring managed clients</li>\n";
        $html .= "<ul><li>Via group policy</li></ul>\n";
        $html .= "<li>Patch Manager Overview</li>\n";
        $html .= "<ul><li>WSUS Updates</li>\n";
        $html .= "<li>Third party updates</li></ul>\n";
        $html .= "<li>Patch Manager Console</li>\n";
        $html .= "<ul><li>Navigation pane</li>\n";
        $html .= "<li>DataGrid Pane</li>\n";
        $html .= "<li>Patch Manager computer groups</li></ul>\n";
        $html .= "<li>Publishing Third-Party Updates</li>\n";
        $html .= "<ul><li>Obtaining third-party installers</li></ul>\n";
        $html .= "<li>Inventory and Reporting</li>\n";
        $html .= "<ul><li>Inventory tasks</li>\n";
        $html .= "<li>Report viewer and report builder</li></ul>\n";
        $html .= "<li>Patch Manager WMI Providers</li>\n";
        $html .= "<ul><li>Deploying providers</li></ul>\n";
        $html .= "<li>Advanced Configuration Options</li>\n";
        $html .= "<ul><li>Patch Manager groups</li>\n";
        $html .= "<li>Remote administration consoles</li>\n";
        $html .= "<li>Additional Patch Manager servers</li></ul>\n";
        $html .= "<li>Patch Manager Users & Security</li>\n";
        $html .= "<ul><li>Credentials and credential rings</li>\n";
        $html .= "<li>Security Roles</li></ul>\n";

        $html .= "</ul>";
    }
?>