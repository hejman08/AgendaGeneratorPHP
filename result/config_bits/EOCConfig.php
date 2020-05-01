<?php 
global $EOCDays;
if ($EOCDays > 0)
    {
        $html .= "<h2>" . dayHeader($EOCDays, "EOC Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>EOC Configuration Tasks</h3>\n";
        $html .= "<ul><li>Configuration of EOC software</li>\n";
        $html .= "<li>User configuration</li>\n";
        $html .= "<li>Integration with SolarWinds environments</li>\n";
        $html .= "<li>Custom property configuration/validation</li>\n";
        $html .= "<li>Custom view configuration</li>\n";
        $html .= "<li>Custom map configuration</li>\n";
        $html .= "</ul>";
    }
?>