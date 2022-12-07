<!DOCTYPE html>
<html>
    <body>
        <form method = "POST">
            Username: <input type = "text" name = "username" value = "" required>
            <br><br>
            Age: <input type = "number" name = "age" value = "" required>
            <br><br> <input type = "submit"/>
        </form>
    </body> 
</html>

<?php
        session_start();
        if(isset($_GET["username"]) && isset($_GET["age"])) {
            //Assigning the parameters to the session variables
            $_SESSION["username"] = $_GET["username"];
            $_SESSION["age"] = $_GET["age"];
        } 
        else if(isset($_POST["username"]) && isset($_POST["age"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["age"] = $_POST["age"];
            echo "<br>Both variables have been recorded <br>";
        }
?>