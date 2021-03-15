<?php 
global $ARMDays;
if ($ARMDays > 0)
    {
        $html .=  "<h2>" . dayHeader($ARMDays, "ARM Best Practices Configuration") . "</h2>\n"
        .  "<h3>ARM Configuration Tasks</h3>\n"
        .  "<ul><li>Configuration of Active Directory service components</li>"
        .  "<li>SQL Server Database Maintenance</li>"
        .  "<li>Configuration of Collectors and Scans:</li>"
        .  "<ul><li>Active Directory</li>"
        .  "<li>File Server</li>"
        .  "<li>Exchange</li>"
        .  "<li>SharePoint</li>"
        .  "<li>SAP</li>"
        .  "<li>Azure AD</li>"
        .  "<li>OneDrive/Office 365</li></ul>"
        .  "<li>Deployment of Additional Collector servers (if multiple domains exist without trusts between them)</li>"
        .  "<li>AD Logga Configuration</li>"
        .  "<li>FS Logga Configuration</li>"
        .  "<ul><li>Installation of FS Logga Collector on file servers</li></ul>"
        .  "<li>Configuration of Web Components</li>"
        .  "<li>User GUI access management</li>"
        .  "<li>Configuration of Alerts</li>"
        .  "<li>Reporting Overview</li>"
        .  "</ul>";
}
?>