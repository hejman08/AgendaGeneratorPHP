<html>
    <head>
        <link rel="stylesheet" href="output.css">
    </head>
<body>
<?php
//includes and "pre-work" stuff
    $errormsg = null; //will change in the vars file mainly, if the user didn't enter something on the form.
    include_once ("result/vars.php"); //built an entire sub-file for POST variables because good gods are there a lot in this form.
    include_once ("result/modules.php"); //File that determines modules/acronyms/boolean if it's an Orion engagement, and boolean if it has Network Modules
    include_once ("result/serverspecs.php"); //PHP function that will return specs for all needed servers when called, based on choices on the form
    include_once ("result/dayheader.php"); //PHP function that will look at the Rolling Day Count (RDC) and return an appropriate Header for that day when called
    include_once ("result/serverspecs.php"); //contains PHP function for generating server specs. Or at least it will once the rest of this works.
    include_once ("result/intros.php"); //contains intro paragraphs for different engagement types

    if($errormsg == null) {
        echo "<h1>Project Overview</h1>";
        echo introPara($EngagementType);
    } // end main results generation
    
    else // you done messed up A-A-ron.
    {
        echo "<h1>Error(s) Encountered</h1>";
        echo "Please resolve the following errors to continue.<ul>";
        echo $errormsg;
    }
?>

<?php  ?>
</body>