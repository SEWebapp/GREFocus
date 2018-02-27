<?php

if(isset($_POST['rsubmit'])){
    require('config.php');

    $fname = mysqli_real_escape_string($con , $_POST['fname']);
    $lname = mysqli_real_escape_string($con , $_POST['lname']);
    $email = mysqli_real_escape_string($con , $_POST['email']);
    $uid = mysqli_real_escape_string($con , $_POST['ruid']);
    $pwd = mysqli_real_escape_string($con , $_POST['rpwd']);

    //Check If Empty
    if( empty($fname) || empty($lname) || empty($email) || empty($uid) || empty($pwd)){

        header("Location: ../login_register.html?register=empty");
        exit();
    } else {
        //Check if Valid
        if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname) ){
            header("Location: ../login_register.html?register=invalid");
            exit();
        }else {
            //Check if email valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../login_register.html?register=invalidemail");
                exit();
            }else{
                $sql = "SELECT * FROM users WHERE user_uid='ruid' ";
                $result = mysqli_query($con, $sql);
                $resultcheck = mysqli_num_rows($result);

                if($resultcheck > 0){
                    header("Location: ../login_register.html?register=alreadyregistered");
                    exit();
                }else{
                    //Hashing Password
                    $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT);
                    //Insert the user into db
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$fname', '$lname', '$email', '$uid', '$hashedpwd');";
                    mysqli_query($con, $sql);
                    header("Location: ../index.php");
                    exit();
                    
                }

            }
        }

    }
    


} else {
    header("Location: ../login_register.html");
    exit();
}


?>