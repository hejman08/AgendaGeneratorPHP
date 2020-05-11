<?php 
global $APITrainDays;
if ($APITrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($APITrainDays, "SolarWinds API Training") . "</h2>\n";
        
        $html .= "<ul>\n";
$html .= "<li>Overview of SQL and SWQL</li>\n";
$html .= "<ul>\n";
$html .= "<li>Understanding basic SQL queries</li>\n";
$html .= "<ul>\n";
$html .= "<li>SQL SELECT statements</li>\n";
$html .= "<li>SQL Order of Operations</li>\n";
$html .= "</ul>\n";
$html .= "<li>Understanding SQL Joins</li>\n";
$html .= "<li>SolarWinds Database architecture & schema</li>\n";
$html .= "<li>Commonly targeted tables for SolarWinds queries</li>\n";
$html .= "<li>Differences between SQL and SWQL</li>\n";
$html .= "<li>Installing and using the Orion SDK</li>\n";
$html .= "<ul>\n";
$html .= "<li>SWQL Studio</li>\n";
$html .= "<li>PowerShell Module</li>\n";
$html .= "</ul>\n";
$html .= "</ul>\n";

$html .= "<li>SolarWinds API basics</li>\n";
$html .= "<ul><li>Using PowerShell and other languages to query SolarWinds</li>\n";
$html .= "<li>Updating SolarWinds using SWIS Verbs</li>\n";
$html .= "<li>Integrating SolarWinds with other tools</li>\n";
$html .= "<ul>\n";
$html .= "<li>ServiceNow</li>\n";
$html .= "</ul>\n";
$html .= "</ul>\n";
$html .= "</ul>\n";
}
?>