<?php 
global $SAM100;
if ($SAM100 > 0)
    {
        $html .= "<h2>" . dayHeader($SAM100, "SAM User Training") . "</h2>\n"
        . "<h3>SAM Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>Understanding SAM Prerequisites<br />\n"
        . "<ul>\n"
        . "<li>Orion Service Packs</li>\n"
        . "<li>Application Discovery</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Populating SAM nodes into Orion</li>\n"
        . "<li>Understanding Orion SAM Components &amp; Templates\n"
        . "<ul>\n"
        . "<li>SAM Component Monitors\n"
        . "<ul>\n"
        . "<li>Windows Based Components</li>\n"
        . "<li>Synthetic Transactions &ndash; User Experience Monitors</li>\n"
        . "<li>Linux/Unix Script Monitors</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Assigning Application Monitor Templates</li>\n"
        . "<li>Understanding Orion SAM Credentials</li>\n"
        . "<li>SAM Component Monitor Wizard</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Understanding Alerting with Orion SAM</li>\n"
        . "<li>Working with Orion SAM Applications &amp; Components in Reports and Groups</li>\n"
        . "<li>Working with Orion SAM Objects in Orion Maps\n"
        . "<ul>\n"
        . "<li>Including Applications &amp; Component Status in Maps</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "</ul>\n";

    }
?>