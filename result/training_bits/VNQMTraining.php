<?php 
global $VNQMTrainDays;
if ($VNQMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($VNQMTrainDays, "VNQM User Training") . "</h2>\n";
        $html .= "<h3>VNQM Training Topics</h3>\n";
        $html .= "<ul><li>VNQM Compatible Sources</li>\n";
        $html .= "<ul><li>Cisco IPSLA compatible devices</li>\n";
        $html .= "<li>Cisco Call managers</li>\n";
        $html .= "<li>Avaya Call managers</li></ul>\n";
        $html .= "<li>Adding VNQM Devices</li>\n";
        $html .= "<li>Defining IPSLA operations</li>\n";
        $html .= "<ul><li>Understanding IPSLA operation types</li>\n";
        $html .= "<li>Working with IPSLA thresholds</li>\n";
        $html .= "<li>Configuring new IPSLA operations</li>\n";
        $html .= "<li>Adding existing (pre-configured) IPSLA operations</li></ul>\n";
        $html .= "<li>Configuring Call Manager Nodes</li>\n";
        $html .= "<ul><li>Configuring Call Manager server access</li>\n";
        $html .= "<li>Configuring CDR/CMR FTP settings</li></ul>\n";
        $html .= "<li>Understanding call detail records</li>\n";
        $html .= "<li>Leveraging VNQM statistics in Orion Mapping</li>\n";
        $html .= "<ul><li>Using VNQM data in maps</li></ul>\n";
        $html .= "<li>Working with VNQM alerts</li>\n";
        $html .= "<li>Working with VNQM in reports</li>\n";

        $html .= "</ul>";
    }
?>