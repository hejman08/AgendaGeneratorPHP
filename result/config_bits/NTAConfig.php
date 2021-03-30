<?php 
global $NTADays;
if ($NTADays > 0)
    {
        $html .= "<h2>" . dayHeader($NTADays, "NTA Best Practices Configuration") . "</h2>\n"
        . "<h3>NTA Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Validation of sources</li>\n"
        . "<ul>\n"
        . "<li>Addition of interfaces to Orion core</li>\n"
        . "<li>Addition of endpoints to Orion core</li>\n"
        . "</ul>\n"
        . "<li>Default dashboard cleanup</li>\n"
        . "<li>Core Node detail view integration</li>\n"
        . "<ul>\n"
        . "<li>Addition of NetFlow resources</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>NTA Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>IP Address group configuration</li>\n"
        . "<ul>\n"
        . "<li>Site based groups</li>\n"
        . "<li>Application based groups</li>\n"
        . "</ul>\n"
        . "<li>Custom application configuration</li>\n"
        . "<li>Custom dashboard creation</li>\n"
        . "<ul>\n"
        . "<li>Site View example</li>\n"
        . "</ul>\n"
        . "<li>Reporting</li>\n"
        . "<ul>\n"
        . "<li>Report creation</li>\n"
        . "<li>Automation scheduling</li>\n"
        . "</ul>\n"
        . "</ul>\n";
        
    }
?>