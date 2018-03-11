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
