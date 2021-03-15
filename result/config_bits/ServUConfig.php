<?php 
global $ServUDays;
if ($ServUDays > 0)
    {
        $html .= "<h2>" . dayHeader($ServUDays, "Serv-U Best Practices Configuration") . "</h2>\n"
        . "<h3>Serv-U Configuration Tasks</h3>\n"
        . "<ul><li>Installation of Serv-U servers</li>\n"
        . "<ul><li>Serv-U Gateway</li>\n"
        . "<li>Serv-U MFT Server</li></ul>\n"
        . "<li>Import of Users – Qty: 250</li>\n"
        . "<ul><li>Domains: 5</li>\n"
        . "<li>Loop1 Systems will make an attempt to export/import usernames and passwords from the existing solution, but it may require "
        . "password changes for users to be successful.</li>\n"
        . "<li>Segregation of users to maintain PCI compliance</li>\n"
        . "<li>Integration with Active Directory</li></ul>\n"
        . "<li>Configuration of Transfer Ratios/Quotas</li>\n"
        . "<li>Configuration of automated file management</li>\n"
        . "<ul><li>Move/Delete files after X days</li></ul>\n"
        . "<li>Self-Service Password Recovery overview</li>\n"
        . "<li>Remote Management Overview (Web & iPad)</li>\n"
        . "<li>Custom Branding</li>\n"
        . "<ul><li>File Sharing Guest UI</li>\n"
        . "<li>Logos/HTML on web client pages</li></ul>\n"
        . "</ul>";
    }
?>