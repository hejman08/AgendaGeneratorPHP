<?php 
global $DWDays;
if ($DWDays > 0)
    {
        $html .= "<h2>" . dayHeader($DWDays, "DW Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>DW Configuration Tasks</h3>\n";
        $html .= "<ul><li>Configuration - Microsoft Windows Network browser</li>\n";
        $html .= "<ul><li>Global Host List</li>\n";
        $html .= "<li>Personal Host List</li>\n";
        $html .= "<li>Local Groups</li>\n";
        $html .= "<li>Global Groups</li></ul>\n";
        $html .= "<li>Configuration - Views</li>\n";
        $html .= "<ul><li>Active Directory Object View</li>\n";
        $html .= "<li>MMC Integration </li>\n";
        $html .= "<li>Batch Processing</li>\n";
        $html .= "<li>Event Log View</li>\n";
        $html .= "<li>Explore Network View</li>\n";
        $html .= "<li>Registry View</li>\n";
        $html .= "<li>Remote Command View</li>\n";
        $html .= "<li>Search View</li>\n";
        $html .= "<li>Shutdown View</li></ul>\n";
        $html .= "</ul>";
    }
?>