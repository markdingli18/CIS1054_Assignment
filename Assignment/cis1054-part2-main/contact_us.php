

<!DOCTYPE html>
<?php 
    require_once 'database.php';
    require_once __DIR__ . '/bootstrap.php';
    echo $twig->render("contact_us.html", []);
?>

<!------- PHP for Contact us -------->

<?php

    if (!empty($_POST['submit'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact_inquiry (fname, lname, email, phone, message) 
                values ('$fname', '$lname', '$email', '$phone', '$message')";

        if (mysqli_query($conn, $sql)){
            #echo "New record added successfully";
        }else{
            #echo "Error : ". $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>