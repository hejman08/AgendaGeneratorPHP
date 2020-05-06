<?php 
global $DPATrainDays;
if ($DPATrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($DPATrainDays, "DPA User Training") . "</h2>\n";
        $html .= "<h3>DPA Training Topics</h3>\n";
        $html .= "<ul><li>Navigating the application user interface</li>\n";
        $html .= "<li>Using DPA to troubleshoot database issues</li>\n";
        $html .= "<ul><li>Performance bottlenecks</li>\n";
        $html .= "<li>Historical trending</li>\n";
        $html .= "<li>Real-time analysis</li>\n";
        $html .= "<li>Query analysis</li></ul>\n";
        $html .= "<li>Alert Configuration</li>\n";
        $html .= "<li>Reporting</li>\n";
        $html .= "<ul><li>Custom report creation</li>\n";
        $html .= "<li>Report automation Scheduling</li></ul>\n";

        $html .= "</ul>";
    }
?>