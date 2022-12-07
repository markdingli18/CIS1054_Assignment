<?php
session_start();
if($_SESSION ["username"] || $_SESSION ["age"])
{
    echo "Welcome ".$_SESSION["username"]."!<br>";
    echo "You are ".$_SESSION["age"]." years old at the moment.";
    exit();
}
else {
    echo "<br>No details have been entered yet";
}
?>