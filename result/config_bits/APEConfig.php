<?php 
global $APEDays;
if ($APEDays > 0)
    {
        $html .=  "<h2>" . dayHeader($APEDays, "APE Best Practices Configuration") . "</h2>\n"
        .  "<h3>APE Configuration Tasks</h3>\n"
        .  "<ul><li>APE workload evaluation / capacity planning</li>\n"
        .  "<li>Load balancing of server device nodes</li>\n"
        .  "<ul><li>Component type balancing</li></ul>\n"
        .  "<li>Load balancing of network device nodes</li>\n"
        .  "<ul><li>Element type balancing</li>\n"
        .  "<li>Topology/Route polling considerations</li></ul>\n"
        .  "</ul>";
    }
?>