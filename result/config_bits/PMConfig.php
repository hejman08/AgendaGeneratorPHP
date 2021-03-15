<?php 
global $PMDays;
if ($PMDays > 0)
    {
        $html .= "<h2>" . dayHeader($PMDays, "PM Best Practices Configuration") . "</h2>\n"
        . "<h3>Configuration of Server platforms</h3>\n"
        . "<ul><li>PM Automation Role server(s) (if needed)</li>\n"
        . "</ul>"
        . "<h3>PM Configuration Tasks</h3>\n"
        . "<ul><li>Import WSUS/SCCM servers</li>\n"
        . "<li>Configure Automation servers (as needed)</li>\n"
        . "<li>Configure credentials</li>\n"
        . "<li>Deploy/Configure WMI providers</li>\n"
        . "<li>Configure computer groups</li>\n"
        . "<li>Scan configuration</li>\n"
        . "<li>Configure MS updates</li>\n"
        . "<li>Configure 3rd Party updates</li>\n"
        . "<ul><li>Custom packages</li>\n"
        . "<li>Scheduling</li>\n"
        . "<li>Validation</li>\n"
        . "<li>Reporting</li></ul>\n"
        . "<li>Testing & Validation</li>\n"
        . "<li>Configuration of compliance reporting</li>\n"
        . "</ul>";
    }
?>