<?php 
global $VNQM200;
if ($VNQM200 > 0)
    {
        $html .= "<h2>" . dayHeader($VNQM200, "VNQM Admin Training") . "</h2>\n"
        . "<h3>VNQM Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>Understanding VNQM Prerequisites<br />\n"
        . "<ul>\n"
        . "<li>Orion NPM &amp; Service Packs</li>\n"
        . "<li>VNQM Capable Sources</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Using the VNQM Web Console<br />\n"
        . "<ul>\n"
        . "<li>Adding VNQM Devices</li>\n"
        . "<li>Defining VNQM Operations<br />\n"
        . "<ul>\n"
        . "<li>Understanding VNQM Operation Types</li>\n"
        . "<li>IPSLA Operations</li>\n"
        . "<li>Call Managers</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Leveraging VNQM Statistics in Network Atlas<br />\n"
        . "<ul>\n"
        . "<li>Using VNQM Data in Maps</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Working with VNQM Alerts</li>\n"
        . "<li>Working with VNQM Reports and Groups</li>\n"
        . "</ul>\n";
        
    }
?>