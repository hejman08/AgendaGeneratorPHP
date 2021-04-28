<?php 
global $PM200;
if ($PM200 > 0)
    {
        $html .= "<h2>" . dayHeader($PM200, "PM Admin Training") . "</h2>\n"
        . "<h3>PM Training Topics</h3>\n"
        . "<ul><li>Configuring managed clients</li>\n"
        . "<ul><li>Via group policy</li></ul>\n"
        . "<li>Patch Manager Overview</li>\n"
        . "<ul><li>WSUS Updates</li>\n"
        . "<li>Third party updates</li></ul>\n"
        . "<li>Patch Manager Console</li>\n"
        . "<ul><li>Navigation pane</li>\n"
        . "<li>DataGrid Pane</li>\n"
        . "<li>Patch Manager computer groups</li></ul>\n"
        . "<li>Publishing Third-Party Updates</li>\n"
        . "<ul><li>Obtaining third-party installers</li></ul>\n"
        . "<li>Inventory and Reporting</li>\n"
        . "<ul><li>Inventory tasks</li>\n"
        . "<li>Report viewer and report builder</li></ul>\n"
        . "<li>Patch Manager WMI Providers</li>\n"
        . "<ul><li>Deploying providers</li></ul>\n"
        . "<li>Advanced Configuration Options</li>\n"
        . "<ul><li>Patch Manager groups</li>\n"
        . "<li>Remote administration consoles</li>\n"
        . "<li>Additional Patch Manager servers</li></ul>\n"
        . "<li>Patch Manager Users & Security</li>\n"
        . "<ul><li>Credentials and credential rings</li>\n"
        . "<li>Security Roles</li></ul>\n"

        . "</ul>";
    }
?>