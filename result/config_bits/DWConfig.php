<?php 
global $DWDays;
if ($DWDays > 0)
    {
        $html .= "<h2>" . dayHeader($DWDays, "DW Best Practices Configuration") . "</h2>\n"
        . "<h3>DW Configuration Tasks</h3>\n"
        . "<ul><li>Configuration - Microsoft Windows Network browser</li>\n"
        . "<ul><li>Global Host List</li>\n"
        . "<li>Personal Host List</li>\n"
        . "<li>Local Groups</li>\n"
        . "<li>Global Groups</li></ul>\n"
        . "<li>Configuration - Views</li>\n"
        . "<ul><li>Active Directory Object View</li>\n"
        . "<li>MMC Integration </li>\n"
        . "<li>Batch Processing</li>\n"
        . "<li>Event Log View</li>\n"
        . "<li>Explore Network View</li>\n"
        . "<li>Registry View</li>\n"
        . "<li>Remote Command View</li>\n"
        . "<li>Search View</li>\n"
        . "<li>Shutdown View</li></ul>\n"
        . "</ul>";
    }
?>