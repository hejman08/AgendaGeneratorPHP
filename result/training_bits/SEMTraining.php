<?php 
global $SEMTrainDays;
if ($SEMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($SEMTrainDays, "SEM User Training") . "</h2>\n";
        $html .= "<h3>SEM Training Topics</h3>\n";
        $html .= "<ul><li>Understanding SEM Deployment</li>\n";
        $html .= "<ul><li>SEM Appliance Considerations</li>\n";
        $html .= "<li>SEM Manager</li>\n";
        $html .= "<li>SEM Agents</li>\n";
        $html .= "<li>Distributed/scaled up deployments</li></ul>\n";
        $html .= "<li>Using the SEM Web Console</li>\n";
        $html .= "<ul><li>Management Functions</li>\n";
        $html .= "<ul><li>CMC/SSH connection</li>\n";
        $html .= "<li>Appliances</li>\n";
        $html .= "<li>Nodes</li>\n";
        $html .= "<ul><li>Non-Agent Nodes</li>\n";
        $html .= "<li>Connectors</li>\n";
        $html .= "<li>FIM</li>\n";
        $html .= "<li>USB Defender</li></ul></ul>\n";
        $html .= "<li>Ops Center - System Wide Activity Summary</li>\n";
        $html .= "<li>Monitor - Real Time Activity</li>\n";
        $html .= "<ul><li>Filters</li>\n";
        $html .= "<li>Build- Defining Objects</li>\n";
        $html .= "<ul><li>Group Types</li>\n";
        $html .= "<li>State Variable</li>\n";
        $html .= "<li>Event Group</li>\n";
        $html .= "<li>Directory Service Group</li>\n";
        $html .= "<li>Connector Profiles</li>\n";
        $html .= "<li>Email Templates</li>\n";
        $html .= "<li>Time of Day Set</li>\n";
        $html .= "<li>User Defined Group</li></ul>\n";
        $html .= "<li>Rules</li>\n";
        $html .= "<ul><li>Custom Rules</li>\n";
        $html .= "<li>Rule Selection Wizard</li></ul>\n";
        $html .= "<li>Alerts</li>\n";
        $html .= "<ul><li>Alert actions</li></ul></ul></ul>\n";
        $html .= "<li>Administrative functions</li>\n";
        $html .= "<ul><li>Upgrading the appliance</li>\n";
        $html .= "<li>Agent push/upgrade</li>\n";
        $html .= "<li>Troubleshooting rules/alerts</li>\n";
        $html .= "<li>Appliance management</li></ul>\n";
        $html .= "<li>Using the SEM Reports Viewer</li>\n";
        $html .= "<li>Built-In Reports</li>\n";
        $html .= "<ul><li>Manage Categories</li></ul>\n";
        $html .= "<li>Scheduling Reports</li>\n";
        $html .= "<li>Expert and Custom Reports</li>\n";
        $html .= "</ul>";
        
        $html .= "</ul>";
    }
?>