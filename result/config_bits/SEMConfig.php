<?php 
global $SEMDays;
if ($SEMDays > 0)
    {
        $html .= "<h2>" . dayHeader($SEMDays, "SEM Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>SEM Configuration Tasks</h3>\n";
        $html .= "<ul><li>Import/Validation of Nodes</li>\n";
        $html .= "<ul><li>Syslog configuration</li>\n";
        $html .= "<li>Agent configuration</li></ul>\n";
        $html .= "<li>Deployment/troubleshooting of agents</li>\n";
        $html .= "<li>Configuration & assignment of Connector Profiles</li>\n";
        $html .= "<li>USB Defender</li>\n";
        $html .= "<li>File Integrity Monitoring (FIM)</li>\n";
        $html .= "<ul><li><a href='https://support.solarwinds.com/SuccessCenter/s/article/Enable-File-Auditing-in-Windows?_Event_Manager_%28LEM%29%2FEnable_File_Auditing_in_Windows='>Enable File Auditing in Windows</a></li></ul>\n";
        $html .= "<li>Configuration of user access</li>\n";
        $html .= "<li>Configuration of Directory Services</li>\n";
        $html .= "<li>Group configuration</li>\n";
        $html .= "<li>Configuration of Windows Audit Policy</li>\n";
        $html .= "<ul><li><a href='https://support.solarwinds.com/SuccessCenter/s/article/Audit-Policies-and-Best-Practices-for-LEM'>Audit Policies and Best Practices for SEM</a></li>\n";
        $html .= "<li><a href='https://support.solarwinds.com/SuccessCenter/s/article/Configure-LEM-Audit-Policy-Information'>Configure SEM Audit Policy Information</a></li></ul>\n";
        $html .= "<li>Configuration of rules</li>\n";
        $html .= "<li>Configuration of email templates</li>\n";
        $html .= "<li>Configuration of alert actions</li>\n";
        $html .= "<li>Testing & validation of rules/alerts</li>\n";
        $html .= "<li>Admin functions</li>\n";
        $html .= "<ul><li>Upgrading the appliance</li>\n";
        $html .= "<li>Agent push/upgrade</li>\n";
        $html .= "<li>Troubleshooting rules/alerts</li>\n";
        $html .= "<li>Appliance management</li></ul>\n";
        $html .= "</ul>";
        $html .= "<h3>SEM Report Configuration Tasks</h3>\n";
        $html .= "<ul><li>Overview of configuration of SEM reports </li>\n";
        $html .= "<ul><li>Report configuration</li>\n";
        $html .= "<li>Report scheduling</li></ul>\n";
        $html .= "<li>nDepth report usage</li>\n";
        $html .= "<ul><li>Using filters</li>\n";
        $html .= "<li>Saved reports</li></ul>\n";
        $html .= "</ul>";
    }
?>