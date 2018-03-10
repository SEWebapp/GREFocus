<?php

if(isset($_POST['submit'])){
    require('config.php');

    $name = mysqli_real_escape_string($con , $_POST['name']);
    $email = mysqli_real_escape_string($con , $_POST['email']);
    $subject = mysqli_real_escape_string($con , $_POST['subject']);
    $message = mysqli_real_escape_string($con , $_POST['feedback']);

    //Check If Empty
    if( empty($name) || empty($email) || empty($subject) || empty($message)){

        header("Location: ../about.php?error=empty");
        exit();
    } else {
            //Check if email valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../about.php?error=invalidemail");
                exit();
            }else{

                    //Insert the user into db
                    $sql = "INSERT INTO feedback ( name, email, subject, message) VALUES ('$name','$email', '$subject', '$message');";
                    mysqli_query($con, $sql);

                    echo '<script language="javascript">';
                    echo 'alert("Thanks For The Feedback..!");
                            window.location = "../index.php";';
                    echo '</script>';
                    //header("Location: ../index.php");   
                    exit();
                    
                }

            
        }

    }else {
    header("Location: ../about.php");
    exit();
}


?>