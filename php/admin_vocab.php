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
          <a class="nav-link  active" href="admin_vocab.php">Vocab Section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quant Section</a>
        </li>
         <li class="nav-item">
           <a class="nav-link" href="admin_feedback.php">Feedback Section</a>
         </li>
         <li class="nav-item">
				 	<a class="nav-link" href="logout.php">Logout</a>
         </li>
      </ul>
    </div>
  </nav>

<br><br>
<div class="col-md-6 mx-auto m-4">
    <form action="admin_vocab_update.php" method="POST">
        <fieldset>
            <center><h2>Add Words</h2></center>
            <br>
            <div class="form-group">
                
                <input type="text" name="word" class="form-control" id="word" placeholder="Enter the word">
            </div>
            <div class="form-group">
                
                <input type="text" name="synonym" class="form-control" id="synonym" placeholder="Enter the synonym">
            </div>
            <div class="form-group">
                
                <input type="text" name="antonym" class="form-control" id="antonym" placeholder="Enter the antonym">
            </div>
            <div class="form-group">
                
                <textarea name="sentence" class="form-control" id="sentence" placeholder="Enter the sentence" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 95px;"></textarea>
            </div>
            <center>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </center>
        </fieldset>
    </form>
</div>
</body>
<br>
<center><h2>Vocab List</h2></center>
<br>
</html>

<html>
</html>
<?php
$vocab= "SELECT * FROM vocab";
$resvocab=mysqli_query($con,$vocab);
if($resvocab)
{
	echo '<div class="table-responsive col-md-10 mx-auto">
				<table class="table borderless table-hover" id="table" style="color:black;font-weight:bold;font-size:15px">
				<thead class="thead-dark">
				<tr>
          <th scope="col">Serial No</th>
          <th scope="col">Word</th>
          <th scope="col">Synonym</th>
          <th scope="col">Antonym</th>
          <th scope="col">Sentence</th>
        </tr>';

    while($row=mysqli_fetch_array($resvocab))
    {
        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['word']."</td>
        <td>".$row['synonym']."</td>
        <td>".$row['antonym']."</td>
        <td>".$row['sentence']."</td>
        </tr>";
    }
    echo"</table>" ;   
}
?>
<html>
<br><br>
    <br>
</html>
