<?php
session_start();
require('config.php');
?>
<html>
<head>

	
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: center;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}


.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
	</style>
</head>
<br>
<br>
<br>
<center><h1>Users List</h1></center>
<br>
</html>
<?php
$user = "SELECT * FROM users";

$resuser=mysqli_query($con,$user);

if($resuser)
{
    echo "<table class=data-table>
        <tr><td>Serial No</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>User Id</td>      
        </tr>";
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
    echo"</table>" ;   
}
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<br><br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-4">
      <div class="card border-primary mb-3">
        <div class="card-body text-primary">
          <h4 class="card-title">Vocabulary Section</h4>
          <div class="divider"></div><br>
		  <a href="admin_vocab.php">
          <img src="../images/vocabulary.png" alt="VocabularyIcon" class="img-fluid mx-auto d-block"></a><br>
          <p class="card-text">A collection of the most frequently repeating words in the GRE general test.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4">
      <div class="card border-primary mb-3">
        <div class="card-body text-primary">
          <h4 class="card-title">Quants Section</h4>
          <div class="divider"></div><br>
          <img src="../images/formula.png" alt="VocabularyIcon" class="img-fluid mx-auto d-block"><br>
          <p class="card-text">A collection of the most widely and repeatedly used formulae in the GRE general test.</p>
		
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4">
      <div class="card border-primary mb-3">
        <div class="card-body text-primary">
          <h4 class="card-title">Feedback Section</h4>
		  <div class="divider"></div><br>
		  <a href="admin_feedback.php">
          <img src="../images/test.png" alt="VocabularyIcon" class="img-fluid mx-auto d-block"></a><br>
          <p class="card-text">Feedback provided by users of the website about the content and design of the website.</p>
        </div>
      </div>
    </div>
</div>
</div>
<br>
<center>
<a href="logout.php">
<button class="button button2">Logout</button>
</a>
</center>

  <script src="../js/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>