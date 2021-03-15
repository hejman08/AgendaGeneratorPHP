<?php 
global $DPATrainDays;
if ($DPATrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($DPATrainDays, "DPA User Training") . "</h2>\n"
        . "<h3>DPA Training Topics</h3>\n"
        . "<ul><li>Navigating the application user interface</li>\n"
        . "<li>Using DPA to troubleshoot database issues</li>\n"
        . "<ul><li>Performance bottlenecks</li>\n"
        . "<li>Historical trending</li>\n"
        . "<li>Real-time analysis</li>\n"
        . "<li>Query analysis</li></ul>\n"
        . "<li>Alert Configuration</li>\n"
        . "<li>Reporting</li>\n"
        . "<ul><li>Custom report creation</li>\n"
        . "<li>Report automation Scheduling</li></ul>\n"

        . "</ul>";
    }
?>