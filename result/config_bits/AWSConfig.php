<?php 
global $AWSDays;
if ($AWSDays > 0)
    {
        $html .= "<h2>" . dayHeader($AWSDays, "AWS Best Practices Configuration & Hands-On Training") . "</h2>\n";
        $html .= "<h3>APE Configuration Tasks</h3>\n";
        $html .= "<ul><li>Validation of install</li>\n";
        $html .= "<li>Configuration of SSL if desired</li></ul>\n";
        $html .= "<h3>AWS Load Balancing Tasks</h3>\n";
        $html .= "<ul><li>AWS workload evaluation</ li>\n";
        $html .= "<ul><li>Load balancing of user web console sessions</li></ul>\n";
        $html .= "</ul>";
    }
?>