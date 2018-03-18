<?php
include '../php/config.php';
session_start();
$query1 = "SELECT * FROM vt1questions";
    $result1 = mysqli_query($con, $query1);
    $total = mysqli_num_rows($result1);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

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

  </nav>

  <div class="jumbotron jumbotron-fluid">
      <div class="container">
          <br>
      <h3>Correct Answers: <?php echo $_SESSION['score']; ?></h3>
      <h3>Wrong Answers: <?php echo $total - $_SESSION['score']; ?></h3>
      <br>
      <a href="/GREFocus/index.php"><input type="button" class="btn btn-primary" value="Go Back"></a>
      </div>
  </div>

<?php
 unset($_SESSION['score'])
?>

  <script src="../js/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>