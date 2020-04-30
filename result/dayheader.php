<?php
function dayHeader($DayCount, $Module) {
global $rdc;
{
    $ReturnStr= null;
    if ($rdc == 0) //Basically handling cases where there is no rolling day count yet.
    {
        switch ($DayCount)
        {

        case 0.5: //If this module takes up half a day
            
                $ReturnStr = "Day 1 (AM) | " . $Module; //if we're already on a half day before this, return a "PM" half day
            $rdc = 0.5;
            
            break;
        case 1:
            $ReturnStr = "Day 1 | " . $Module; //if we are on a half daay, return "Day X (PM) - Day Y (AM)"
            
            $rdc = 1;
            break;
        default: //Assume to get here we have a count above 1 (1.5 or higher)
            if (strpos($DayCount,".5") !== false) //if this module takes a number of days > 1 that ends in ".5"
                
                    $ReturnStr = "Day 1 - Day "  . ($DayCount + 0.5) . " (AM) | " . $Module;
            else //return normal "Days X - Y"
                $ReturnStr = "Days 1 - " . $DayCount . " | " . $Module;
            $rdc += $DayCount;
            break;
        }
    }
    else 
    {

    switch ($DayCount)
    {

        case 0.5: //If this module takes up half a day
            if (strpos($rdc, ".5") !== false)
                $ReturnStr = "Day " . ($rdc + 0.5) ." (PM) | " . $Module; //if we're already on a half day before this, return a "PM" half day
            else
                $ReturnStr = "Day " . ($rdc + 1) . " (AM) | " . $Module; //otherwise, return an "AM" half day
            $rdc += 0.5;
            break;
        case 1.0:
            if (strpos($rdc, ".5") !== false) //if module takes up exactly 1 day
            {
                $ReturnStr = "Day " . ($rdc + 0.5) . " (PM) - Day " . ($rdc + 1.5) . " (AM) | " . $Module;
            }//if we are on a half daay, return "Day X (PM) - Day Y (AM)"
        else
        {
            $ReturnStr = "Day " . ($rdc + 1) . " | " . $Module;
        } // Otherwise return a normal "Day X"
            $rdc += 1;
            break;
        default: //Assume to get here we have a count above 1 (1.5 or higher)
            if (strpos($DayCount,".5") !== false) //if this module takes a number of days ending in ".5"
                if (strpos($rdc, ".5") !== false) //if we're already on a half day then return "Day X (PM) - Day Y"
                    $ReturnStr = "Day " . ($rdc + 0.5) . " (PM) - Day " . ($rdc + $DayCount) . " | " . $Module;
                else //return "Day X - Day Y (AM)"
                    $ReturnStr = "Day " . ($rdc + 1) . " - Day " . ($rdc + $DayCount + 0.5) . " (AM) | " . $Module;
            else //$Module takes a whole number of days
                if (strpos($rdc, ".5") !== false) //if we're on a half day already, return "Day X (PM) - Day Y (AM)"
                $ReturnStr = "Day " . ($rdc + 0.5) . " (PM) - Day " . ($rdc + $DayCount + 0.5) . " (AM) | " . $Module;
            else //return normal "Days X - Y"
                $ReturnStr = "Days " . ($rdc + 1) . " - " . ($rdc + $DayCount) . " | " . $Module;
            $rdc += $DayCount;
            break;
        }
    }
    
    return $ReturnStr;
    }
}
?>