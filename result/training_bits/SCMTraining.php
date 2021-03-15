<?php 
global $SCMTrainDays;
if ($SCMTrainDays > 0)
    {
        $html .= "<h2>" . dayHeader($SCMTrainDays, "SCM User Training") . "</h2>\n"
        . "<h3>SCM Training Topics</h3>\n"
        . "<ul><li>Adding nodes to SCM</li>\n"
        . "<ul><li>Orion Agent deployment</li></ul>\n"
        . "<li>Configuration profile Assignment</li>\n"
        . "<ul><li>Out-of-the-box templates</li>\n"
        . "<ul><li>IIS configuration</li>\n"
        . "<li>HW inventory</li>\n"
        . "<li>SW inventory</li></ul>\n"
        . "<li>User-defined templates</li>\n"
        . "<ul><li>File changes</li>\n"
        . "<li>Registry changes</li></ul></ul>\n"
        . "<li>Baseline Configuration Profile creation</li>\n</ul>"

        . "</ul>";
    }
?>