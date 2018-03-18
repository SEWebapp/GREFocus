<?php
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
    <a class="navbar-brand" href="#">GREFocus Admin PAnel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#DefaultNavBar" aria-controls="DefaultNavBar"
      aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="DefaultNavBar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <div class="m-4 col-md-8 mx-auto border border-primary">
    <div class="container-fluid">
      <div class="row m-4 ">
      <div class="col-md-6 mx-auto  mb-3">
          <form id="login-form" action="php/admin.php" method="POST">
            <fieldset>
                <center>
            <h3>Admin Login</h3>
            <div class="form-group">
              <label for="LUserNameInput">User Name</label>
              <input type="text" name="uid" class="form-control" id="LUserNameInput" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="LPasswordInput">Password</label>
              <input type="password" name="pwd" class="form-control" id="LPasswordInput" placeholder="Password">
            </div>
                </center>
            </fieldset>
            <center>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </center>
          </fieldset>
        </form>
       </div>

</body>
</html>