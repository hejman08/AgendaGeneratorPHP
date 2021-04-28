<?php 
global $SCM200;
if ($SCM200 > 0)
    {
        $html .= "<h2>" . dayHeader($SCM200, "SCM Admin Training") . "</h2>\n"
        . "<h3>SCM Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>Understanding Orion SCM Requirements</li>\n"
        . "<li>Conducting Hardware &amp; Software Inventory using SCM</li>\n"
        . "<li>Working with Profiles<br />\n"
        . "<ul>\n"
        . "<li>Creating Custom Profiles</li>\n"
        . "<li>Assigning Profiles using SCM</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Understanding FIM and tracking changes</li>\n"
        . "</ul>\n";
        
    }
?>