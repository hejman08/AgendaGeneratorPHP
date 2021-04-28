<?php 
global $NTA200;
if ($NTA200 > 0)
    {
        $html .= "<h2>" . dayHeader($NTA200, "NTA Admin Training") . "</h2>\n"
        . "<h3>NTA Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>Understanding Orion NTA Prerequisites<br />\n"
        . "<ul>\n"
        . "<li>Database Performance Considerations</li>\n"
        . "<li>Flow Technologies</li>\n"
        . "<li>Configuring NetFlow Sources</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>NetFlow Design Theories</li>\n"
        . "<li>Using the Orion NTA Web Console<br />\n"
        . "<ul>\n"
        . "<li>Viewing NetFlow Sources</li>\n"
        . "<li>Working &amp; Monitored Applications</li>\n"
        . "<li>Working &amp; IP Address Groups</li>\n"
        . "<li>Orion NTA Data Retention</li>\n"
        . "<li>Configuration of NetFlow on common CISCO devices<br />\n"
        . "<ul>\n"
        . "<li>Configuration using both CLI and NCM</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "</ul>\n";
        
    }
?>