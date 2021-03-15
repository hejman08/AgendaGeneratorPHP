<?php 
global $AdminKTDays, $isOrionEng, $modules, $KTModules;
if ($AdminKTDays > 0)
    {
        $html .= "<h2>" . dayHeader($AdminKTDays, "Verbal Knowledge Transfer") . "</h2>\n"
             . "<h3>SolarWinds Administrative Tasks</h3>\n"
                       # $html .= "<ul><li>User access control</li>\n";
                       # $html .= "<li>Upgrades/Patching</li>\n";
                       # $html .= "<li>Application security</li>\n";
                       # $html .= "<li>SolarWinds software troubleshooting</li>\n";
                       # $html .= "<li>Monitoring troubleshooting</li>\n";
                       # $html .= "<ul><li>Unknown components</li>\n";
                       # $html .= "<li>Stale alerts</li>\n";
                       # $html .= "<li>Polling issues</li></ul>\n";
                       # if ($isOrionEng == true)
                       # {
                       #     $html .= "<li>Database structure (Core modules)</li>\n";
                       #     $html .= "<li>Database best practices</li>\n";
                       # }
                       # $html .= "<li>Enterprise monitoring best practices</li></ul>\n";
                     
            . "<h3>Verbal Knowledge Transfer</h3>\n"
            . "<ul><li>Review of key configurations implemented by Loop1 Systems during the engagement";
            
            if ($isOrionEng == true)
                {
                    $KTModules .= "<li>Core Application MS SQL Server</li>\n";
                }
            $html .= $KTModules;

            $html .= "<li>Q&A session</li>\n"
                . "</ul>\n"
                . "</ul>\n"
                . "</ul>\n";
    }
?>