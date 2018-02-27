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
        <li class="nav-item active">
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

  <!-- Jumbotron -->
  <div class="jumbotron">
    <h1 class="display-3">GRE</h1>
    <h1 class="display-5">Graduate Record Examination</h1>
    <p class="lead">The GRE is a testing system that most international universities (including USA and Canada) adopt to assess a student's
      potential for higher academic pursuits, advanced studies and research. This standardized test compares the performance
      of a student with millions of others who have written this exam.</p>
    <p class="lead">
      <a class="btn btn-primary btn-md" href="#" role="button">Learn more</a>
    </p>
  </div>

  <h3 class="text-center mb-3">Site Features</h3>

  <!-- Card Grid -->
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-4">
      <div class="card border-primary mb-3">
        <div class="card-body text-primary">
          <h4 class="card-title">Vocabulary Builder</h4>
          <div class="divider"></div><br>
          <img src="images/vocabulary.png" alt="VocabularyIcon" class="img-fluid mx-auto d-block"><br>
          <p class="card-text">A collection of the most frequently repeating words in the GRE general test.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4">
      <div class="card border-primary mb-3">
        <div class="card-body text-primary">
          <h4 class="card-title">Formulae List</h4>
          <div class="divider"></div><br>
          <img src="images/formula.png" alt="VocabularyIcon" class="img-fluid mx-auto d-block"><br>
          <p class="card-text">A collection of the most widely and repeatedly used formulae in the GRE general test.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4">
      <div class="card border-primary mb-3">
        <div class="card-body text-primary">
          <h4 class="card-title">GRE Practice Tests</h4>
          <div class="divider"></div><br>
          <img src="images/test.png" alt="VocabularyIcon" class="img-fluid mx-auto d-block"><br>
          <p class="card-text">A collection of real GRE question to practice and get familiar with GRE test layout.</p>
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