<?php
include 'php/config.php';
session_start();

$query = "SELECT * FROM universities";
$result = mysqli_query($con , $query);


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>GREFocus</title>
</head>

<body>

  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">GREFocus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#DefaultNavBar" aria-controls="DefaultNavBar"
      aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="DefaultNavBar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="NavBarDropDown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Study Material
          </a>
          <div class="dropdown-menu" aria-labelledby="NavBarDropDown1">
            <a class="dropdown-item" href="/GREFocus/php/vocab.php">Verbal</a>
            <a class="dropdown-item" href="#">Quant</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="NavBarDropDown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Practice Test
          </a>
          <div class="dropdown-menu" aria-labelledby="NavBarDropDown2">
            <a class="dropdown-item" href="/GREFocus/verbaltestpage.php">Verbal</a>
            <a class="dropdown-item" href="#">Quant</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="topuni.php">Top Universities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
          <?php

            if(isset($_SESSION['u_id'])){
              echo '<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="NavBarDropDown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['u_fname'].' '.$_SESSION['u_lname'].'</a>
              <div class="dropdown-menu" aria-labelledby="NavBarDropDown1">
                <a class="dropdown-item" href="/GREFocus/php/logout.php">Logout</a>
              </div>
            </li>' ;
              //echo $_SESSION['u_fname'];
            }else{
              echo '<a class="nav-link" href="login_register.php">Login/Register</a>';
            }

          ?>
      </ul>
    </div>
  </nav>

  <br><br>
  <center><h1 class="display-5">Top Universities for Masters in CS</h1></center><br>
  <!-- Card Grid -->
  <div class="container-fluid">
        <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
          <div class="col-md-3 col-sm-12">
            <div class="card mb-3">
              <div class="card-body">
                 <img style="height: 200px; width: 300px; display: block;" src="<?php echo $row['image']; ?>" alt="Title">
                  <br>
                <h3><?php echo $row['rank']; ?>. <?php echo $row['name'] ?></h3>
                <p class="lead">Verbal Score: <?php echo $row['verbal'] ?></p>
                <p class="lead">Quant Score: <?php echo $row['quant'] ?></p>
                <a class="btn btn-primary" href="<?php echo $row['website'] ?>" role="button" target="_blank">Website</a>
              </div>
            </div>
          </div>
          <?php endwhile;?>
        </div>
  </div>
<br><br><br>





  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>