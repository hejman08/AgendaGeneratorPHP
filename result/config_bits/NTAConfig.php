<?php 
global $NTADays;
if ($NTADays > 0)
    {
        $html .= "<h2>" . dayHeader($NTADays, "NTA Best Practices Configuration") . "</h2>\n"
        . "<h3>NTA Configuration Tasks</h3>\n"
        . "<ul><li>NTA Deployment strategy</li>\n"
        . "<li>Validation of sources </li>\n"
        . "<ul><li>Configuration of NetFlow exporters</li>\n"
        . "<li>Addition of interfaces to Orion core</li>\n"
        . "<li>Addition of endpoints to Orion core</li></ul>\n"
        . "<li>IP Address group configuration </li>\n"
        . "<ul><li>Site based groups</li>\n"
        . "<li>Application based groups</li></ul>\n"
        . "<li>Custom application configuration</li>\n"
        . "<li>Default dashboard cleanup</li>\n"
        . "<li>Custom dashboard creation</li>\n"
        . "<ul><li>Site Views</li></ul>\n"
        . "<li>Core Node detail view integration</li>\n"
        . "<ul><li>Addition of NetFlow resources</li></ul>\n"
        . "<li>Reporting</li>\n"
        . "<ul><li>Report creation</li>\n"
        . "<li>Automation scheduling</li></ul>\n"
        . "</ul>";
    }
?>