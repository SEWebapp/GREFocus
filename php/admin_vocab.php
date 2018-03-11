<?php
session_start();
require('config.php');
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../css/bootstrap.min.css">
	
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
<body>
<div class="col-md-6 mx-auto m-4">
    <form action="admin_vocab_update.php" method="POST">
        <fieldset>
            <h3><center>Update Vocabulary</center></h3>
            
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
<br>
<br>
<center><h1>Vocab List</h1></center>
<br>
</html>

<html>
    <br>
</html>
<?php
$vocab= "SELECT * FROM vocab";
$resvocab=mysqli_query($con,$vocab);
if($resvocab)
{
    echo "<table class=data-table >
        <tr><td>Serial No</td>
        <td>Word</td>
        <td>Synonym</td>
        <td>Antonym</td>
        <td>Sentence</td>      
        </tr>";
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
<center>
<a href="logout.php">
<button class="button button2">Logout</button>
</a>
</center>
    <br>
</html>
