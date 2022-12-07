<!DOCTYPE html>
<?php 
    require_once 'database.php';
    require_once __DIR__ . '/bootstrap.php';
    echo $twig->render("favlistemail.html", []);


// Email Php

    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }

    $fnameError = $lnameError = $emailError = "";
    $fname = $lname = $email = "";

    //When the client submit a form
    if (!empty($_POST["submit"]))
    {
        //Validating first name
        if (!empty($_POST["fname"]))
        {
            $fname = clean_input($_POST["fname"]);
            if (strlen($fname) > 40) {
                $fnameError = "The first name cannot be longer than 40 characters. ";
            }
        }
        else
        {
            $fnameError = "The first name is required. ";
        }

        //Validating last name
        if (!empty($_POST["lname"]))
        {
            $lname = clean_input($_POST["lname"]);
            if (strlen($lname) > 40) {
                $lnameError = "The last name cannot be longer than 40 characters. ";
            }
        }
        else
        {
            $lnameError = "The last name is required. ";
        }

        //Validating email
        if (!empty($_POST["email"]))
        {
            $email = clean_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) > 35) {
                $emailError = "Name cannot be longer than 35 characters. ";
            }
        }
        else
        {
            $emailError = "Email is required. ";
        }

        
         //If no errors are found 
         if (empty($fnameError) && empty($lnameError) && empty($emailError))
         {
            
             mail("client@localhost", "New Favourites Submission", "To whom it may concern, 
             Below you can find the list of favourite dishes you added to your list. You can access this link that will automatically take you to the list. Thanks
             
             Kind Regards,
             Ristorante  Il Gambero.
              
             Link: http://localhost/assignment_4/favourites.php", "From: ilgambero@localhost");
             $fname = $lname = $email= "";
         }  
        
    }
?>


