<?php 
global $NTADays;
if ($NTADays > 0)
    {
        $html .= "<h2>" . dayHeader($NTADays, "NTA Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>NTA Configuration Tasks</h3>\n";
        $html .= "<ul><li>NTA Deployment strategy</li>\n";
        $html .= "<li>Validation of sources </li>\n";
        $html .= "<ul><li>Configuration of NetFlow exporters</li>\n";
        $html .= "<li>Addition of interfaces to Orion core</li>\n";
        $html .= "<li>Addition of endpoints to Orion core</li></ul>\n";
        $html .= "<li>IP Address group configuration </li>\n";
        $html .= "<ul><li>Site based groups</li>\n";
        $html .= "<li>Application based groups</li></ul>\n";
        $html .= "<li>Custom application configuration</li>\n";
        $html .= "<li>Default dashboard cleanup</li>\n";
        $html .= "<li>Custom dashboard creation</li>\n";
        $html .= "<ul><li>Site Views</li></ul>\n";
        $html .= "<li>Core Node detail view integration</li>\n";
        $html .= "<ul><li>Addition of NetFlow resources</li></ul>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "<ul><li>Report creation</li>\n";
        $html .= "<li>Automation scheduling</li></ul>\n";
        $html .= "</ul>";
    }
?>