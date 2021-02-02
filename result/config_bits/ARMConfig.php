<?php 
global $ARMDays;
if ($ARMDays > 0)
    {
        $html .= "<h2>" . dayHeader($ARMDays, "ARM Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>ARM Configuration Tasks</h3>\n";
        $html .= "<ul><li>Configuration of Active Directory service components</li>";
        $html .= "<li>SQL Server Database Maintenance</li>";
        $html .= "<li>Configuration of Collectors and Scans:</li>";
        $html .= "<ul><li>Active Directory</li>";
        $html .= "<li>File Server</li>";
        $html .= "<li>Exchange</li>";
        $html .= "<li>SharePoint</li>";
        $html .= "<li>SAP</li>";
        $html .= "<li>Azure AD</li>";
        $html .= "<li>OneDrive/Office 365</li></ul>";
        $html .= "<li>Deployment of Additional Collector servers (if multiple domains exist without trusts between them)</li>";
        $html .= "<li>AD Logga Configuration</li>";
        $html .= "<li>FS Logga Configuration</li>";
        $html .= "<ul><li>Installation of FS Logga Collector on file servers</li></ul>";
        $html .= "<li>Configuration of Web Components</li>";
        $html .= "<li>User GUI access management</li>";
        $html .= "<li>Configuration of Alerts</li>";
        $html .= "<li>Reporting Overview</li>";
        $html .= "</ul>";
}
?>