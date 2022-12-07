<?php
    //The techniques to achieve this are session together with session variables

    //Starting the session
    session_start();
    //Checking whether the session variables are already set, meaning there is already a user session
    if(!(isset($_SESSION["date"]))) {
        //Setting the variables date and time as session variables
        $_SESSION["date"] = date("d/m/Y", time());
        $_SESSION["time"] = time();
    }
    //Calculating the time elapsed from the first time the page was loaded 
    $timeElapsed = time() - $_SESSION["time"];
    echo "You loaded this page for the first time ".$timeElapsed." seconds ago";
?>