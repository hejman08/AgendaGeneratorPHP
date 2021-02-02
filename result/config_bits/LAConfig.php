<?php 
global $LADays;
if ($LADays > 0)
    {
        $html .= "<h2>" . dayHeader($LADays, "LA Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>LA Configuration Tasks</h3>\n";
        $html .= "<ul><li>Addition/removal of LA managed nodes</li>\n";
        $html .= "<li>Deployment of Orion agents for server nodes</li>\n";
        $html .= "<li>Configuration of retention settings</li>\n";
        $html .= "<li>Configuration of log-processing rules</li>\n";
        $html .= "<ul><li>Global Preprocessing</li>\n";
        $html .= "<li>Global Postprocessing</li>\n";
        $html .= "<li>Built-in rules</li>\n";
        $html .= "<ul><li>Syslog</li>\n";
        $html .= "<li>NCM RTCD</li>\n";
        $html .= "<li>SNMP Trap</li></ul>\n";
        $html .= "<li>Custom rules</li></ul>\n";
        $html .= "<li>Log Viewer overview</li>\n";
        $html .= "</ul>";
    }
?>