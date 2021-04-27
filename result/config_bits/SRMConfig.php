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
            $html .= "<h3>SRM Standard Configuration Tasks</h3>\n"
            . "<ul>\n"
            . "<li>Configuration of credentials</li>\n"
            . "<li>Validation/Import of storage arrays</li>\n"
            . "<li>Advanced alert configuration</li>\n"
            . "<ul>\n"
            . "<li>Noise Reduction</li>\n"
            . "<li>Notification</li>\n"
            . "<li>Escalation</li>\n"
            . "<li>Severity</li>\n"
            . "</ul>\n"
            . "</ul>\n"
            . "<h3>SRM Optional Configuration Tasks</h3>\n"
            . "<ul>\n"
            . "<li>Configuration of groups</li>\n"
            . "<li>Reporting</li>\n"
            . "<ul>\n"
            . "<li>Report creation</li>\n"
            . "<li>Automation scheduling</li>\n"
            . "</ul>\n"
            . "</ul>\n";
            
        }
    }
?>