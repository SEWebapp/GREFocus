<?php
include '../php/config.php';
session_start();
?>
<?php
    
    $number = (int) $_GET['n'];

    $query1 = "SELECT * FROM vt1questions WHERE q_no = $number";

    $result1 = mysqli_query($con, $query1);
    $question = mysqli_fetch_assoc($result1);

    $query2 = "SELECT * FROM vt1options WHERE q_no = $number";

    $result2 = mysqli_query($con, $query2);

    $query3 = "SELECT * FROM vt1questions";
    $result3 = mysqli_query($con, $query3);
    $total = mysqli_num_rows($result3);
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
          
      <h4 class="current">Question <?php echo $question['q_no'];?> of <?php echo $total; ?></h4>
            <hr class="my-2">
            <br><br>
          <h4 class="question">
          <?php
            echo $question['question'];
          ?>         
          </h4>

          <form method="POST" action="process.php">
            <ul class="options" style="list-style-type: none">
                <br>
                <?php while($row = mysqli_fetch_assoc($result2)): ?>

                <li><input type="radio" name="option" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
                <br>

                <?php endwhile; ?>
            </ul>
            <input type="submit" value="Submit" class="btn btn-primary">
            <input type="hidden" name="number" value="<?php echo $number; ?>">
          </form>

      </div>
  </div>






  <script src="../js/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>