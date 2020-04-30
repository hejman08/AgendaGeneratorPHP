<html>
    <head>
        <link rel="stylesheet" href="output.css">
    </head>
<body>
<?php
//includes and "pre-work" stuff
    include ("result/vars.php"); //built an entire sub-file for POST variables because good gods are there a lot in this form.
    include ("result/modules.php"); //File that determines modules/acronyms/boolean if it's an Orion engagement, and boolean if it has Network Modules
    include ("result/serverspecs.php"); //PHP function that will return specs for all needed servers when called, based on choices on the form
    include ("result/dayheader.php"); //PHP function that will look at the Rolling Day Count (RDC) and return an appropriate Header for that day when called

?>
</body>