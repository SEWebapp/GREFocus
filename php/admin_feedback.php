<?php
session_start();
require('config.php');
?>
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
        <li class="nav-item">
          <a class="nav-link" href="adminop.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="admin_vocab.php">Vocab Section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quant Section</a>
        </li>
         <li class="nav-item">
           <a class="nav-link  active" href="admin_feedback.php">Feedback Section</a>
         </li>
         <li class="nav-item">
				 	<a class="nav-link" href="logout.php">Logout</a>
         </li>
      </ul>
    </div>
  </nav>



<br><br>
<center><h2>Feedback Messages</h2></center>
<br>

<?php
$feedback= "SELECT * FROM feedback";
$resfeed=mysqli_query($con,$feedback);
if($resfeed)
{
	echo '<div class="table-responsive col-md-10 mx-auto">
	<table class="table borderless table-hover" id="table" style="color:black;font-weight:bold;font-size:15px">
	<thead class="thead-dark">
	<tr>
	<th scope="col">Serial No</th>
	<th scope="col">Name</th>
	<th scope="col">Email</th>
	<th scope="col">Subject</th>
	<th scope="col">Message</th>
	</tr>';

    while($row=mysqli_fetch_array($resfeed))
    {
        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['subject']."</td>
        <td>".$row['message']."</td>
        </tr>";
    }
    echo"</table>" ;   
}
?>
<br>
</body>