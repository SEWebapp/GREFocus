<?php
include 'php/config.php';
session_start();

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
          <a class="nav-link" href="#">Top Universities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
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

  

<!-- Feedback From -->
<div class="col-md-6 mx-auto m-4">
    <form id="feedback-form" action="php/feedback.php" method="POST">
        <fieldset>
            <h3>FeedBack </h3>
            <div class="form-group">
                <label for="NameInput">Name</label>
                <input type="text" name="name" class="form-control" id="NameInput" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="EmailInput">Email</label>
                <input type="email" name="email" class="form-control" id="EmailInput" placeholder="Enter Your email">
            </div>
            <div class="form-group">
                <label for="SubjectInput">Subject</label>
                <input type="text" name="subject" class="form-control" id="SubjectInput" placeholder="Enter Subject">
            </div>
            <div class="form-group">
                <label for="FeedbackInput">Message</label>
                <textarea name="feedback" class="form-control" id="FeedbackInput" placeholder="Enter Message" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 95px;"></textarea>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
</div>


<!-- Jumbotron -->
<div class="jumbotron">

  <center><h1 class="display-5">Meet Our Team</h1></center>
  <br>
    <!-- Team Cards -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card   mb-3  ">
                    <center>
                    <img style="height: 100%; width: 50%; display: block;" src="images/yash.png" alt="Yash Mahajan">
                    </center>
                    <div class="card-body">
                        <h3>Yash Mahajan</h3>
                        <p class="card-text">Third Year Computer Science Engineering Student<br>Roll No: 43<br>DBIT</p>
                        <a href="https://github.com/starlord98"><button class="btn btn-primary">Github Profile</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card   mb-3  ">
                    <center>
                    <img style="height: 100%; width: 50%; display: block;" src="images/nihit.png" alt="Nihit Natu">
                    </center>
                    <div class="card-body">
                        <h3>Nihit Natu</h3>
                        <p class="card-text">Third Year Computer Science Engineering Student<br>Roll No: 54<br>DBIT</p>
                        <a href="https://github.com/nihit97natu"><button class="btn btn-primary">Github Profile</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card   mb-3  ">
                    <center>
                    <img style="height: 100%; width: 50%; display: block;" src="images/vaibhav.png" alt="Vaibhav Patil">
                    </center>
                    <div class="card-body">
                        <h3>Vaibhav Patil</h3>
                        <p class="card-text">Third Year Computer Science Engineering Student<br>Roll No: 59<br>DBIT</p>
                        <a href="https://github.com/vaibhav0698"><button class="btn btn-primary">Github Profile</button></a>
                        
                    </div>
                </div>
            </div>  
        </div>
    </div>

  </div>


    

  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>