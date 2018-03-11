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
    <a class="navbar-brand" href="#">GREFocus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#DefaultNavBar" aria-controls="DefaultNavBar"
      aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="DefaultNavBar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home
            <span class="sr-only">(current)</span>
          </a>
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
            <a class="dropdown-item" href="#">Verbal</a>
            <a class="dropdown-item" href="#">Quant</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Top Universities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Login/Register</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="m-4 border border-primary">
    <div class="container-fluid">
      <div class="row m-4 ">
      <div class="col-md-3 mx-auto  mb-3">
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