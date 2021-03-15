<?php 
global $NTMDays;
if ($NTMDays > 0)
    {
        $html .= "<h2>" . dayHeader($NTMDays, "NTM Best Practices Configuration") . "</h2>\n"
        . "<h3>NPM/NTM Configuration Tasks</h3>\n"
        . "<ul><li>Core Orion – Worldwide Map</li>\n"
        . "<ul><li>Worldwide Map configuration</li>\n"
        . "<ul><li>Custom property population (lat./long)</li>\n"
        . "<li>Node population</li></ul></ul>\n"
        . "<li>NTM Configuration Tasks (Topology Maps)</li>\n"
        . "<ul><li>Creation of Network Topology maps</li>\n"
        . "<ul><li>Network scans</li>\n"
        . "<ul><li>Export to Visio for customization (optional)</li></ul>\n"
        . "<li>Import to Network Atlas</li>\n"
        . "<ul><li>Integration with NPM</li></ul></ul>\n"
        . "<li>Configuration of Scheduled Discoveries</li></ul>\n"
        . "</ul>";
    }
?>