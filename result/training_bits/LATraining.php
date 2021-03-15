<?php 
global $LATrainDays;
if ($LATrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($LATrainDays, "LA User Training") . "</h2>\n"
        . "<h3>LA Training Topics</h3>\n"
        . "<ul><li>Addition/removal of LA managed nodes</li>\n"
        . "<li>Deployment of Orion agents for server nodes</li>\n"
        . "<li>Configuration of retention settings</li>\n"
        . "<li>Configuration of log-processing rules</li>\n"
        . "<ul><li>Global Preprocessing</li>\n"
        . "<li>Global Postprocessing</li>\n"
        . "<li>Built-in rules</li>\n"
        . "<ul><li>Syslog</li>\n"
        . "<li>NCM RTCD</li>\n"
        . "<li>SNMP Trap</li></ul>\n"
        . "<li>Custom rules</li></ul>\n"
        . "<li>Log Viewer overview</li>\n"

        . "</ul>";
    }
?>