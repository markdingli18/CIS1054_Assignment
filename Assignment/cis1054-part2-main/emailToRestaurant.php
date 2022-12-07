<?php
    require_once __DIR__ . '/bootstrap.php';
    include 'database.php';
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }

    $fnameError = $lnameError = $emailError = $phoneError = $messageError = "";
    $fname = $lname = $email = $phone = $message = "";

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

        //Validating phone
        if (!empty($_POST["phone"]))
        {
             $phone = clean_input($_POST["phone"]);
             if (strlen($phone) != 8) {
                $phoneError = "The phone number must be 8 characters long. ";
             }
        }
        else
        {
             $phoneError = "The phone number is required. ";
        }

        //Validate message
        if (!empty($_POST["message"])) {
            $message = clean_input($_POST["message"]);
            if(strlen($message) > 3500) {
                $messageError = "Messages cannot be longer than 3500 characters. ";
            }
         }
         else
         {
            $messageError = "Message is required. ";
         }

         //If no errors are found 
         if (empty($fnameError) && empty($lnameError) && empty($emailError) && empty($phoneError) && empty($messageError))
         {
             echo $twig->render("contact_us.html", ["success"=>"Message was successfully submitted."]);
             mail("ilgambero@localhost", "New Contact us Submission", $message, "From: $email\r\nCc: $email");
             $fname = $lname = $email = $phone = $message = "";
         }  
         //If errors are found       
         else { 
             echo $twig->render("contact_us.html", ["success"=>$fnameError.$lnameError.$emailError.$phoneError.$messageError]);
            }

    }
?>