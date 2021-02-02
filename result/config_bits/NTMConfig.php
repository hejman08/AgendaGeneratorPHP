<?php 
global $NTMDays;
if ($NTMDays > 0)
    {
        $html .= "<h2>" . dayHeader($NTMDays, "NTM Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>NPM/NTM Configuration Tasks</h3>\n";
        $html .= "<ul><li>Core Orion – Worldwide Map</li>\n";
        $html .= "<ul><li>Worldwide Map configuration</li>\n";
        $html .= "<ul><li>Custom property population (lat./long)</li>\n";
        $html .= "<li>Node population</li></ul></ul>\n";
        $html .= "<li>NTM Configuration Tasks (Topology Maps)</li>\n";
        $html .= "<ul><li>Creation of Network Topology maps</li>\n";
        $html .= "<ul><li>Network scans</li>\n";
        $html .= "<ul><li>Export to Visio for customization (optional)</li></ul>\n";
        $html .= "<li>Import to Network Atlas</li>\n";
        $html .= "<ul><li>Integration with NPM</li></ul></ul>\n";
        $html .= "<li>Configuration of Scheduled Discoveries</li></ul>\n";
        $html .= "</ul>";
    }
?>