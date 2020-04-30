<?php 
global $SRMDays;
if ($SRMDays > 0)
    {
        $html .= "<h2>" . dayHeader($SRMDays, "SRM Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>SRM Configuration Tasks</h3>\n";
        if ($chkSRMProfiler == true) {
            $html .= "<ul><li>Configuration of SRM software (as needed)</li>\n";
            $html .= "<ul><li>SRM by Profiler core application</li>\n";
            $html .= "<li>SRM Additional Polling Engine(s) (if needed)</li>\n";
            $html .= "<li>SRM Orion module</li></ul>\n";
            $html .= "<li>Configuration of credentials</li>\n";
            $html .= "<li>Validation/Import of storage arrays</li>\n";
            $html .= "<li>Validation/Import of fiber channel switches (Profiler only)</li>\n";
            $html .= "<li>Configuration of groups</li>\n";
            $html .= "<li>Configuration of alerts</li>\n";
            $html .= "<li>Configuration of reports/schedules</li>\n";
            $html .= "<li>AppStack Overview</li>\n";
            $html .= "<li>Orion NPM/SAM integration</li>\n";
            $html .= "<ul><li>Orion SRM module</li>\n";
            $html .= "<ul><li>Addition of storage devices</li>\n";
            $html .= "<li>SRM Profiler integration (if Profiler is in use)</li></ul></ul>\n";
            $html .= "</ul>";
        } else {
            $html .= "<ul><li>Configuration of credentials</li>\n";
            $html .= "<li>Validation/Import of storage arrays</li>\n";
            $html .= "<li>Configuration of groups</li>\n";
            $html .= "<li>Configuration of alerts</li>\n";
            $html .= "<li>Configuration of reports/schedules</li>\n";
            $html .= "<li>AppStack Overview</li>\n";
            $html .= "</ul>";
        }
    }
?>