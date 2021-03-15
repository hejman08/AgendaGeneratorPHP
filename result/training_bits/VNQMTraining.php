<?php 
global $VNQMTrainDays;
if ($VNQMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($VNQMTrainDays, "VNQM User Training") . "</h2>\n"
        . "<h3>VNQM Training Topics</h3>\n"
        . "<ul><li>VNQM Compatible Sources</li>\n"
        . "<ul><li>Cisco IPSLA compatible devices</li>\n"
        . "<li>Cisco Call managers</li>\n"
        . "<li>Avaya Call managers</li></ul>\n"
        . "<li>Adding VNQM Devices</li>\n"
        . "<li>Defining IPSLA operations</li>\n"
        . "<ul><li>Understanding IPSLA operation types</li>\n"
        . "<li>Working with IPSLA thresholds</li>\n"
        . "<li>Configuring new IPSLA operations</li>\n"
        . "<li>Adding existing (pre-configured) IPSLA operations</li></ul>\n"
        . "<li>Configuring Call Manager Nodes</li>\n"
        . "<ul><li>Configuring Call Manager server access</li>\n"
        . "<li>Configuring CDR/CMR FTP settings</li></ul>\n"
        . "<li>Understanding call detail records</li>\n"
        . "<li>Leveraging VNQM statistics in Orion Mapping</li>\n"
        . "<ul><li>Using VNQM data in maps</li></ul>\n"
        . "<li>Working with VNQM alerts</li>\n"
        . "<li>Working with VNQM in reports</li>\n"

        . "</ul>";
    }
?>