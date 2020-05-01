<?php 
global $KiwiDays;
if ($KiwiDays > 0)
    {
        $html .= "<h2>" . dayHeader($KiwiDays, "Kiwi Syslog Server Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>Kiwi Syslog Configuration Tasks</h3>\n";
        $html .= "<ul><li>Web Access</li>\n";
        $html .= "<ul><li>User access</li>\n";
        $html .= "<ul><li>Pass-through authentication</li>\n";
        $html .= "<li>AD authentication</li>\n";
        $html .= "<li>User groups</li></ul>\n";
        $html .= "<li>SSL configuration</li></ul>\n";
        $html .= "<li>Log Management</li>\n";
        $html .= "<ul><li>Log destination rules</li>\n";
        $html .= "<li>Log alerts</li>\n";
        $html .= "<li>Filter configuration</li>\n";
        $html .= "<li>Event views</li>\n";
        $html .= "<li>Exports</li>\n";
        $html .= "<ul><li>CSV</li>\n";
        $html .= "<li>Direct link – integrate with Orion NPM</li></ul></ul>\n";
        $html .= "</ul>";
    }
?>