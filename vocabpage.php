<?php
include 'php/config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vocabulary Builder</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function () {

      $('#table').bootstrapTable({

        method: 'get',
        url: 'json/vocab_json_data.json',
        pagination: true,
        pageSize: 10,
         
      });
    });

  </script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">GREFocus</a>
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
          <a class="nav-link dropdown-toggle active" href="#" id="NavBarDropDown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="dropdown-item" href="verbaltestpage.php">Verbal</a>
            <a class="dropdown-item" href="#">Quant</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="topuni.php">Top Universities</a>
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
 
  <ol class="breadcrumb m-2">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item">Study Material</li>
    <li class="breadcrumb-item">Vocabulary</li>
  </ol>

  <center><h1 class="display-5">High Frequency Vocabulary WOrds</h1></center>

  <div class="table-responsive p-2 " >
  <div id="toolbar"></div>
    <table class="table dt-responsive borderless table-hover" id="table" style="color:black;font-weight:bold;font-size:15px" data-show-refresh="true"
        data-toolbar="#toolbar"
       data-search="true"
       data-show-refresh="true"
       data-show-columns="true"
       data-show-export="true"

    >
      <thead class="thead-dark">
        <tr>
          <th data-field="id" scope="col" data-sortable="true">#</th>
          <th data-field="word" scope="col" data-sortable="true">Word</th>
          <th data-field="synonym" scope="col" data-sortable="true">Synonym</th>
          <th data-field="antonym" scope="col" data-sortable="true">Antonym</th>
          <th data-field="sentence" scope="col" data-sortable="true">Sentence</th>
        </tr>
      </thead>
    </table>
  </div>


  </div>


</body>


</html>