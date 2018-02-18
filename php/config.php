<?php   

define('DB_HOST','localhost');
define('DB_NAME','GREFocus');
define('DB_USER','root');
define('DB_PASS','');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die("Failed to Connect to Database: ".mysli_error($con));
$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to MYsql ".mysli_error($con)) ;

?>