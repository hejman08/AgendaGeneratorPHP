<?php 
global $PMDays;
if ($PMDays > 0)
    {
        $html .= "<h2>" . dayHeader($PMDays, "PM Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>Configuration of Server platforms</h3>\n";
        $html .= "<ul><li>PM Automation Role server(s) (if needed)</li>\n";
        $html .= "</ul>";
        $html .= "<h3>PM Configuration Tasks</h3>\n";
        $html .= "<ul><li>Import WSUS/SCCM servers</li>\n";
        $html .= "<li>Configure Automation servers (as needed)</li>\n";
        $html .= "<li>Configure credentials</li>\n";
        $html .= "<li>Deploy/Configure WMI providers</li>\n";
        $html .= "<li>Configure computer groups</li>\n";
        $html .= "<li>Scan configuration</li>\n";
        $html .= "<li>Configure MS updates</li>\n";
        $html .= "<li>Configure 3rd Party updates</li>\n";
        $html .= "<ul><li>Custom packages</li>\n";
        $html .= "<li>Scheduling</li>\n";
        $html .= "<li>Validation</li>\n";
        $html .= "<li>Reporting</li></ul>\n";
        $html .= "<li>Testing & Validation</li>\n";
        $html .= "<li>Configuration of compliance reporting</li>\n";
        $html .= "</ul>";
    }
?>