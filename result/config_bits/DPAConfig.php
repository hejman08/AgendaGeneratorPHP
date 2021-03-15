<?php 
global $DPADays;
if ($DPADays > 0)
    {
        $html .= "<h2>" . dayHeader($DPADays, "DPA Best Practices Configuration") . "</h2>\n"
        . "<h3>DPA Configuration Tasks</h3>\n"
        . "<ul><li>Credential configuration</li>\n"
        . "<li>Import of target database instances</li>\n"
        . "<li>Validation of credential permissions for monitored databases</li>\n"
        . "<li>Configuration of Virtualized instances</li>\n"
        . "<li>Alert Configuration</li>\n"
        . "<li>Custom report creation</li>\n"
        . "<li>Report automation Scheduling</li>\n"
        . "<li>Integration with SAM module</li>\n"
        . "<li>AppStack Overview</li>\n"
        . "</ul>";
    }
?>