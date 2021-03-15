<?php 
global $APITrainDays;
if ($APITrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($APITrainDays, "SolarWinds API Training") . "</h2>\n"
        
        . "<ul>\n"
        . "<li>Overview of SQL and SWQL</li>\n"
        . "<ul>\n"
        . "<li>Understanding basic SQL queries</li>\n"
        . "<ul>\n"
        . "<li>SQL SELECT statements</li>\n"
        . "<li>SQL Order of Operations</li>\n"
        . "</ul>\n"
        . "<li>Understanding SQL Joins</li>\n"
        . "<li>SolarWinds Database architecture & schema</li>\n"
        . "<li>Commonly targeted tables for SolarWinds queries</li>\n"
        . "<li>Differences between SQL and SWQL</li>\n"
        . "<li>Installing and using the Orion SDK</li>\n"
        . "<ul>\n"
        . "<li>SWQL Studio</li>\n"
        . "<li>PowerShell Module</li>\n"
        . "</ul>\n"
        . "</ul>\n"

        . "<li>SolarWinds API basics</li>\n"
        . "<ul><li>Using PowerShell and other languages to query SolarWinds</li>\n"
        . "<li>Updating SolarWinds using SWIS Verbs</li>\n"
        . "<li>Integrating SolarWinds with other tools</li>\n"
        . "<ul>\n"
        . "<li>ServiceNow</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "</ul>\n";
}
?>