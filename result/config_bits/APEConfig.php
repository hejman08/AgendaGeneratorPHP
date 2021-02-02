<?php 
global $APEDays;
if ($APEDays > 0)
    {
        $html .= "<h2>" . dayHeader($APEDays, "APE Best Practices Configuration") . "</h2>\n";
        $html .= "<h3>APE Configuration Tasks</h3>\n";
        $html .= "<ul><li>APE workload evaluation / capacity planning</li>\n";
        $html .= "<li>Load balancing of server device nodes</li>\n";
        $html .= "<ul><li>Component type balancing</li></ul>\n";
        $html .= "<li>Load balancing of network device nodes</li>\n";
        $html .= "<ul><li>Element type balancing</li>\n";
        $html .= "<li>Topology/Route polling considerations</li></ul>\n";
        $html .= "</ul>";
    }
?>