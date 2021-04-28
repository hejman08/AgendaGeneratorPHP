<?php 
global $NPM200;
if ($NPM200 > 0)
    {
        $html .= "<h2>" . dayHeader($NPM200, "NPM Admin Training") . "</h2>\n"
        . "<h3>NPM Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>Orion Architecture Best Practices\n"
        . "<ul>\n"
        . "<li>Primary Polling Engine</li>\n"
        . "<li>Additional Polling Engines</li>\n"
        . "<li>Additional Web Engines</li>\n"
        . "<li>SQL Server</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Discovery of Nodes in the Enterprise</li>\n"
        . "<li>Out-of-the-Box Monitoring vs. Custom Pollers\n"
        . "<ul>\n"
        . "<li>Creation of Universal Device Pollers</li>\n"
        . "<li>Creation of Custom Device Studio Pollers</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>NetPath Configuration</li>\n"
        . "<li>Network Insight for F5 Devices Overview</li>\n"
        . "</ul>\n";
    }
?>