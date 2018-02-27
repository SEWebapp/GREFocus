<?php

session_start();

if(isset($_POST['lsubmit'])){
    require('config.php');

    $uid = mysqli_real_escape_string($con , $_POST['luid']);
    $pwd = mysqli_real_escape_string($con , $_POST['lpwd']);

    if( empty($uid) || empty($pwd)){

        header("Location: ../login_register.html?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid ='$uid'";
        $result = mysqli_query($con, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck < 1){
            header("Location: ../login_register.html?login=error");
            exit();
        }else {
            if($row = mysqli_fetch_assoc($result)){
                //echo $row['user_fname'] + " " +$row['user_lname'];

                //Dehashing password
                $hashedpwd = password_verify($pwd, $row['user_pwd']);
                if($hashedpwd == false){
                    header("Location: ../login_register.html?login=error");
                    exit();
                }elseif($hashedpwd == true){
                    //Log in the user
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_fname'] = $row['user_first'];
                    $_SESSION['u_lname'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    header("Location: ../index.php");
                    exit();
                }
            }
        }

    }

} else {
    header("Location: ../login_register.html?login=error");
    exit();
}


?>