<?php 
global $SAM200;
if ($SAM200 > 0)
    {
        $html .= "<h2>" . dayHeader($SAM200, "SAM Admin Training") . "</h2>\n"
        . "<h3>SAM Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>SAM Architecture Best Practices<br />\n"
        . "<ul>\n"
        . "<li>Additional Polling Engines and Web Engines</li>\n"
        . "<li>SQL Server</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Discovery of Applications in the Enterprise</li>\n"
        . "<li>AppInsight Templates vs Standard Templates<br />\n"
        . "<ul>\n"
        . "<li>IIS</li>\n"
        . "<li>SQL</li>\n"
        . "<li>Active Directory</li>\n"
        . "<li>Microsoft Exchange</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Custom Script Component Monitors<br />\n"
        . "<ul>\n"
        . "<li>Create Custom PowerShell Script Monitors</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Baselining and Thresholds for Application Alerts</li>\n"
        . "</ul>\n";

    }
?>