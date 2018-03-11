<?php
session_start();
require('config.php');
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

</html>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">GREFocus Admin Panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#DefaultNavBar" aria-controls="DefaultNavBar"
      aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="DefaultNavBar">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="adminop.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_vocab.php">Vocab Section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quant Section</a>
        </li>
         <li class="nav-item">
           <a class="nav-link" href="admin_feedback.php">Feedback Section</a>
         </li>
         <li class="nav-item">
				 	<a class="nav-link" href="logout.php">Logout</a>
         </li>
      </ul>
    </div>
  </nav>

<br>
<br>
<center><h1>Users List</h1></center>
<br><br>

<?php
$user = "SELECT * FROM users";

$resuser=mysqli_query($con,$user);

if($resuser)
{
		echo '<div class="table-responsive col-md-10 mx-auto">
				<table class="table borderless table-hover" id="table" style="color:black;font-weight:bold;font-size:15px">
				<thead class="thead-dark">
				<tr>
          <th scope="col">Serial No</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">User Id</th>
        </tr>';
    while($row=mysqli_fetch_array($resuser))
    {
        echo "<tr>
        <td>".$row['user_id']."</td>
        <td>".$row['user_first']."</td>
        <td>".$row['user_last']."</td>
        <td>".$row['user_email']."</td>
        <td>".$row['user_uid']."</td>
        </tr>";
    }
    echo"</thead>
		</table>
		</div>" ;   
}
?>


<br><br><br>


  <script src="../js/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>