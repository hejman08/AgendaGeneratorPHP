<?php 
global $SCMTrainDays;
if ($SCMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($SCMTrainDays, "SCM User Training") . "</h2>\n";
        $html .= "<h3>SCM Training Topics</h3>\n";
        $html .= "<ul><li>Adding nodes to SCM</li>\n";
        $html .= "<ul><li>Orion Agent deployment</li></ul>\n";
        $html .= "<li>Configuration profile Assignment</li>\n";
        $html .= "<ul><li>Out-of-the-box templates</li>\n";
        $html .= "<ul><li>IIS configuration</li>\n";
        $html .= "<li>HW inventory</li>\n";
        $html .= "<li>SW inventory</li></ul>\n";
        $html .= "<li>User-defined templates</li>\n";
        $html .= "<ul><li>File changes</li>\n";
        $html .= "<li>Registry changes</li></ul></ul>\n";
        $html .= "<li>Baseline Configuration Profile creation</li>\n</ul>";

        $html .= "</ul>";
    }
?>