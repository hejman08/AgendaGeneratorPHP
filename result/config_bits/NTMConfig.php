<?php 
global $NTMDays;
if ($NTMDays > 0)
    {
        $html .= "<h2>" . dayHeader($NTMDays, "NTM Best Practices Configuration") . "</h2>\n"
        . "<h3>NPM/NTM Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Core Orion &ndash; Worldwide Map</li>\n"
        . "<ul>\n"
        . "<li>Worldwide Map configuration</li>\n"
        . "<ul>\n"
        . "<li>Custom property population (lat./long)</li>\n"
        . "<li>Node population</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<li>NTM Configuration Tasks (Topology Maps)</li>\n"
        . "<ul>\n"
        . "<li>Creation of Network Topology maps</li>\n"
        . "<ul>\n"
        . "<li>Network scans</li>\n"
        . "<ul>\n"
        . "<li>Export to Visio for customization (optional)</li>\n"
        . "</ul>\n"
        . "<li>Import to Network Atlas</li>\n"
        . "<ul>\n"
        . "<li>Integration with NPM</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<li>Configuration of Scheduled Discoveries</li>\n"
        . "</ul>\n"
        . "</ul>\n"
        . "<h3>NPM/NTM Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>NTM Configuration Tasks (Topology Maps)</li>\n"
        . "<ul>\n"
        . "<li>Configuration of Scheduled Discoveries</li>\n"
        . "</ul>\n"
        . "</ul>\n";
        
    }
?>