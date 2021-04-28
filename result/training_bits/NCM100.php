<?php 
global $NCM100;
if ($NCM100 > 0)
    {
        $html .= "<h2>" . dayHeader($NCM200, "NCM User Training") . "</h2>\n"
        . "<h3>NCM Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>Using Orion NCM</li>\n"
        . "<li>Populating Managed Device\n"
        . "<ul>\n"
        . "<li>Network Discovery</li>\n"
        . "<li>Adding, Editing and Removing Nodes</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Working with Jobs<br />\n"
        . "<ul>\n"
        . "<li>Scheduling Bulk Changes &amp; Backups</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Enabling Real-time Change Notification</li>\n"
        . "<li>Working with Compliance Reports &amp; Policies</li>\n"
        . "<li>Understanding Device Templates</li>\n"
        . "<li>Working with the Orion NCM Web Console<br />\n"
        . "<ul>\n"
        . "<li>Integrating with Orion NPM</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "</ul>\n";
        
    }
?>