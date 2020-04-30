<?php 
global $DPADays;
if ($DPADays > 0)
    {
        $html .= "<h2>" . dayHeader($DPADays, "DPA Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>DPA Configuration Tasks</h3>\n";
        $html .= "<ul><li>Credential configuration</li>\n";
        $html .= "<li>Import of target database instances</li>\n";
        $html .= "<li>Validation of credential permissions for monitored databases</li>\n";
        $html .= "<li>Configuration of Virtualized instances</li>\n";
        $html .= "<li>Alert Configuration</li>\n";
        $html .= "<li>Custom report creation</li>\n";
        $html .= "<li>Report automation Scheduling</li>\n";
        $html .= "<li>Integration with SAM module</li>\n";
        $html .= "<li>AppStack Overview</li>\n";
        $html .= "</ul>";
    }
?>