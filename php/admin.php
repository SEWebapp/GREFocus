<!-- <?php

// session_start();

// if(isset($_POST['submit']))
// {
//     require('config.php');

//     $uid = mysqli_real_escape_string($con , $_POST['uid']);
//     $pwd = mysqli_real_escape_string($con , $_POST['pwd']);

//     if( empty($uid) || empty($pwd))
//     {

//         header("Location: ../admin_login.php?login=empty");
//         exit();
//     } 
//     else {
//         $sql = "SELECT * FROM admins WHERE a_uid ='$uid'";
//         $result = mysqli_query($con, $sql);
//         $resultcheck = mysqli_num_rows($result);
//         if($resultcheck < 1){
//             header("Location: ../admin_login.php?login=error");
//             exit();
//         }
    
//     else {
//         if($row = mysqli_fetch_assoc($result))
//         {
//             //echo $row['user_fname'] + " " +$row['user_lname'];

//             //Dehashing password
//             // $hashedpwd = password_verify($pwd, $row['a_pwd']);
//             if('$a_pwd' == false)
//             {
//                 header("Location: ../login_register.html?login=error");
//                 exit();
//             }
//             elseif('a_pwd' == true)
//             { 
//                 header("Location: ../index.php");
//                     exit();
//             }
//         }
//          }
// }
//         else {
//     header("Location: ../admin_login.php?login=error");
//     exit();
// }
// }


?> -->
<?php
require('config.php');
$query="SELECT a_id,a_pwd FROM admins";
$response=mysqli_query($con,$query);
if($response)
{
    header("Location: adminop.php?login=successful");
    exit();  
}
else {
    echo "Could not use database query";
    echo mysqli_error($con);
}
mysqli_close($con);
?>