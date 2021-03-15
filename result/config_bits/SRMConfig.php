<?php 
global $SRMDays;
if ($SRMDays > 0)
    {
        $html .= "<h2>" . dayHeader($SRMDays, "SRM Best Practices Configuration") . "</h2>\n"
        . "<h3>SRM Configuration Tasks</h3>\n";
        if ($chkSRMProfiler == true) {
            $html .= "<ul><li>Configuration of SRM software (as needed)</li>\n"
            . "<ul><li>SRM by Profiler core application</li>\n"
            . "<li>SRM Additional Polling Engine(s) (if needed)</li>\n"
            . "<li>SRM Orion module</li></ul>\n"
            . "<li>Configuration of credentials</li>\n"
            . "<li>Validation/Import of storage arrays</li>\n"
            . "<li>Validation/Import of fiber channel switches (Profiler only)</li>\n"
            . "<li>Configuration of groups</li>\n"
            . "<li>Configuration of alerts</li>\n"
            . "<li>Configuration of reports/schedules</li>\n"
            . "<li>AppStack Overview</li>\n"
            . "<li>Orion NPM/SAM integration</li>\n"
            . "<ul><li>Orion SRM module</li>\n"
            . "<ul><li>Addition of storage devices</li>\n"
            . "<li>SRM Profiler integration (if Profiler is in use)</li></ul></ul>\n"
            . "</ul>";
        } else {
            $html .= "<ul><li>Configuration of credentials</li>\n"
            . "<li>Validation/Import of storage arrays</li>\n"
            . "<li>Configuration of groups</li>\n"
            . "<li>Configuration of alerts</li>\n"
            . "<li>Configuration of reports/schedules</li>\n"
            . "<li>AppStack Overview</li>\n"
            . "</ul>";
        }
    }
?>