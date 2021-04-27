<?php 
global $ARMDays;
if ($ARMDays > 0)
    {
        $html .=  "<h2>" . dayHeader($ARMDays, "ARM Best Practices Configuration") . "</h2>\n"
        . "<h3>ARM Standard Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>Configuration of Active Directory service components</li>\n"
        . "<li>SQL Server Database Maintenance</li>\n"
        . "<li>Configuration of Collectors and Scans where applicable</li>\n"
        . "<ul>\n"
        . "<li>Active Directory</li>\n"
        . "<li>File Server</li>\n"
        . "<li>Exchange</li>\n"
        . "<li>SharePoint</li>\n"
        . "<li>SAP</li>\n"
        . "<li>Azure AD</li>\n"
        . "<li>OneDrive/Office 365</li>\n"
        . "</ul>\n"
        . "<li>Deployment of Additional Collector servers (if multiple domains exist without trusts between them)</li>\n"
        . "<li>Configuration of Web Components</li>\n"
        . "<li>User GUI access management</li>\n"
        . "<li>Configuration of Alerts</li>\n"
        . "</ul>\n"
        . "<h3>ARM Optional Configuration Tasks</h3>\n"
        . "<ul>\n"
        . "<li>AD Logga Configuration</li>\n"
        . "<li>FS Logga Configuration</li>\n"
        . "<ul>\n"
        . "<li>Installation of FS Logga Collector on file servers</li>\n"
        . "</ul>\n"
        . "<li>Reporting</li>\n"
        . "<ul>\n"
        . "<li>Report creation</li>\n"
        . "<li>Automation scheduling</li>\n"
        . "</ul>\n"
        . "</ul>\n";
        
}
?>