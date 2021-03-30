<?php 
global $PMDays;
if ($PMDays > 0)
    {
        $html .= "<h2>" . dayHeader($PMDays, "PM Best Practices Configuration") . "</h2>\n"
        . "<h3>PM Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Import WSUS/SCCM servers</li>\n"
        . "<li>Configure Automation servers (if present)</li>\n"
        . "<li>Configure credentials</li>\n"
        . "<li>Deploy/Configure WMI providers</li>\n"
        . "<li>Configure computer groups</li>\n"
        . "<li>Scan configuration</li>\n"
        . "<li>Configure MS updates</li>\n"
        . "<li>Configure 3rd Party updates</li>\n"
        . "<ul>\n"
        . "<li>Custom packages if required and as time allows</li>\n"
        . "<li>Scheduling</li>\n"
        . "<li>Validation</li>\n"
        . "<li>Reporting</li>\n"
        . "</ul>\n"
        . "<li>Testing &amp; Validation</li>\n"
        . "</ul>\n"
        . "<h3>PM Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Configuration of compliance reporting</li>\n"
        . "</ul>\n";
        
    }
?>