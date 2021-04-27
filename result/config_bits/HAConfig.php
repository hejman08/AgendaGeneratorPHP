<?php 
global $HADays;
global $numAPEs;
if ($HADays > 0)
    {
        $html .= "<h2>" . dayHeader($HADays, "HA Best Practices Configuration") . "</h2>\n"
        . "<h3>HA Standard Configuration Tasks</h3>\n"
        . "<ul><li>Pre-install validation checks</li>\n"
        . "<ul><li>Server configuration</li>\n"
        . "<li>Network configuration</li>\n"
        . "<li>Server access methods</li></ul>\n"
        . "<li>Installation of software - Secondary server(s)</li>\n"
        . "<ul><li>Protected SolarWinds modules</li></ul>\n"
        . "<li>Activation of HA pool licenses</li>\n"
        . "<li>Configuration of HA pools</li>\n"
        . "<ul><li>Core app servers</li>\n";
        if ($numAPEs > 0)
        {
            $html .= "<li>APE servers</li>";

        }
        $html .= "</ul><li>Configuration of HA settings</li>\n"
        . "<ul><li>Failover condition intervals</li>\n"
        . "<li>Email notification protocol</li></ul>\n"
        . "</ul>";
    }
?>