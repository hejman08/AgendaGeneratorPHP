<?php 
global $NCM200;
if ($NCM200 > 0)
    {
        $html .= "<h2>" . dayHeader($NCM200, "NCM Admin Training") . "</h2>\n"
        . "<h3>NCM Training Topics</h3>\n"
        . "<ul>\n"
        . "<li>\n"
        . "<div>Configuration of NCM</div>\n"
        . "<ul>\n"
        . "<li>Creating and Managing Users</li>\n"
        . "<li>Creating Customized Device Templates</li>\n"
        . "<li>\n"
        . "<div>Creating Customized Configuration Change Templates</div>\n"
        . "</li>\n"
        . "</ul>\n"
        . "</li>\n"
        . "<li>Working with and Understanding Compliance Policy Reports</li>\n"
        . "<li>Overview of Change Approval Process\n"
        . "<div>&nbsp;</div>\n"
        . "</li>\n"
        . "</ul>\n";
        
    }
?>