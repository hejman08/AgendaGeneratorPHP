<?php 
global $HADays;
global $numAPEs;
if ($HADays > 0)
    {
        $html .= "<h2>" . dayHeader($HADays, "HA Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>HA Configuration Tasks</h3>\n";
        $html .= "<ul><li>Pre-install validation checks</li>\n";
        $html .= "<ul><li>Server configuration</li>\n";
        $html .= "<li>Network configuration</li>\n";
        $html .= "<li>Server access methods</li></ul>\n";
        $html .= "<li>Installation of software - Secondary server(s)</li>\n";
        $html .= "<ul><li>Protected SolarWinds modules</li></ul>\n";
        $html .= "<li>Activation of HA pool licenses</li>\n";
        $html .= "<li>Configuration of HA pools</li>\n";
        $html .= "<ul><li>Core app servers</li>\n";
        if ($numAPEs > 0)
        {
            $html .= "<li>APE servers</li>";

        }
        $html .= "</ul><li>Configuration of HA settings</li>\n";
        $html .= "<ul><li>Failover condition intervals</li>\n";
        $html .= "<li>Email notification protocol</li></ul>\n";
        $html .= "</ul>";
    }
?>