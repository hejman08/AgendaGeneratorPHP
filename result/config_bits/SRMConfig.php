<?php 
global $SRMDays;
if ($SRMDays > 0)
    {
        $html .= "<h2>" . dayHeader($SRMDays, "SRM Best Practices Configuration") . "</h2>\n"
            . "<h3>SRM Standard Configuration Tasks</h3>\n"
            . "<ul>\n"
            . "<li>Configuration of credentials</li>\n"
            . "<li>Validation/Import of storage arrays</li>\n";
            if ($chkSRMProfiler == true) { 
                $html .= "<li>Validation/Import of fiber channel switches (Profiler only)</li>\n"
                . "<li>SRM Profiler integration with Orion Platform</li>\n"; 
            }
            $html .= "<li>Advanced alert configuration</li>\n"
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
    
?>