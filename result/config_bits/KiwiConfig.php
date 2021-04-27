<?php 
global $KiwiDays;
if ($KiwiDays > 0)
    {
        $html .= "<h2>" . dayHeader($KiwiDays, "Kiwi Syslog Server Best Practices Configuration") . "</h2>\n"
        . "<h3>Kiwi Syslog Standard Configuration Tasks</h3>\n"
        . "<ul><li>Web Access</li>\n"
        . "<ul><li>User access</li>\n"
        . "<ul><li>Pass-through authentication</li>\n"
        . "<li>AD authentication</li>\n"
        . "<li>User groups</li></ul>\n"
        . "<li>SSL configuration</li></ul>\n"
        . "<li>Log Management</li>\n"
        . "<ul><li>Log destination rules</li>\n"
        . "<li>Log alerts</li>\n"
        . "<li>Filter configuration</li>\n"
        . "<li>Event views</li>\n"
        . "<li>Exports</li>\n"
        . "<ul><li>CSV</li>\n"
        . "<li>Direct link – integrate with Orion NPM</li></ul></ul>\n"
        . "</ul>";
    }
?>