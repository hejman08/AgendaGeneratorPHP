<?php 
global $ServUDays;
if ($ServUDays > 0)
    {
        $html .= "<h2>" . dayHeader($ServUDays, "Serv-U Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>Serv-U Configuration Tasks</h3>\n";
        $html .= "<ul><li>Installation of Serv-U servers</li>\n";
        $html .= "<ul><li>Serv-U Gateway</li>\n";
        $html .= "<li>Serv-U MFT Server</li></ul>\n";
        $html .= "<li>Import of Users – Qty: 250</li>\n";
        $html .= "<ul><li>Domains: 5</li>\n";
        $html .= "<li>Loop1 Systems will make an attempt to export/import usernames and passwords from the existing solution, but it may require password changes for users to be successful.</li>\n";
        $html .= "<li>Segregation of users to maintain PCI compliance</li>\n";
        $html .= "<li>Integration with Active Directory</li></ul>\n";
        $html .= "<li>Configuration of Transfer Ratios/Quotas</li>\n";
        $html .= "<li>Configuration of automated file management</li>\n";
        $html .= "<ul><li>Move/Delete files after X days</li></ul>\n";
        $html .= "<li>Self-Service Password Recovery overview</li>\n";
        $html .= "<li>Remote Management Overview (Web & iPad)</li>\n";
        $html .= "<li>Custom Branding</li>\n";
        $html .= "<ul><li>File Sharing Guest UI</li>\n";
        $html .= "<li>Logos/HTML on web client pages</li></ul>\n";
        $html .= "</ul>";
    }
?>