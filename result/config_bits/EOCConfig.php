<?php 
global $EOCDays;
if ($EOCDays > 0)
    {
        $html .= "<h2>" . dayHeader($EOCDays, "EOC Best Practices Configuration") . "</h2>\n"
        . "<h3>EOC Configuration Tasks</h3>\n"
        . "<ul><li>Configuration of EOC software</li>\n"
        . "<li>User configuration</li>\n"
        . "<li>Integration with SolarWinds environments</li>\n"
        . "<li>Custom property configuration/validation</li>\n"
        . "<li>Custom view configuration</li>\n"
        . "<li>Custom map configuration</li>\n"
        . "</ul>";
    }
?>