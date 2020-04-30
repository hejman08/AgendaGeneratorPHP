<?php
if ($NPMDays > 0 || $NPMTrainDays > 0 || $chkIncludeNPM == 1 || $NPMSize != "None")
{
    $isOrionEng = true;
    $modules .= "<li>NPM</li>\n";
    $hasNetworkModules = true;
    $hasNPM = true;
    $acronyms .= "<li><strong>NPM</strong> - Network Performance Monitor</li>\n";
}
if ($NCMDays > 0 || $NCMTrainDays > 0 || $chkIncludeNPM == 1 || $NCMSize != "None")
{
    $isOrionEng = true;
    $modules .= "<li>NCM</li>\n";
    $hasNetworkModules = true;
    $hasNPM = true;
    $acronyms .= "<li><strong>NPM</strong> - Network Configuration Manager</li>\n";
}
echo $acronyms;
?>