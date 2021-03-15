<?php 
global $AWSDays;
if ($AWSDays > 0)
    {
        $html .= "<h2>" . dayHeader($AWSDays, "AWS Best Practices Configuration") . "</h2>\n"
        . "<h3>APE Configuration Tasks</h3>\n"
        . "<ul><li>Validation of install</li>\n"
        . "<li>Configuration of SSL if desired</li></ul>\n"
        . "<h3>AWS Load Balancing Tasks</h3>\n"
        . "<ul><li>AWS workload evaluation</ li>\n"
        . "<ul><li>Load balancing of user web console sessions</li></ul>\n"
        . "</ul>";
    }
?>