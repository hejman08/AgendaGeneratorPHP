<?php 
global $AWSDays;
if ($AWSDays > 0)
    {
        $html .= "<h2>" . dayHeader($AWSDays, "AWS Best Practices Configuration") . "</h2>\n"
        . "<h3>AWS Standard Configuration Tasks</h3>\n"
        . "<ul><li>Validation of install</li>\n"
        . "<li>Configuration of SSL if desired</li></ul>\n";
    }
?>