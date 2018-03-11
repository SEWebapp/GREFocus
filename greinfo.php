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
          <a class="nav-link" href="topuni.php">Top Universities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
          <?php

if (isset($_SESSION['u_id'])) {
    echo '<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="NavBarDropDown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $_SESSION['u_fname'] . ' ' . $_SESSION['u_lname'] . '</a>
              <div class="dropdown-menu" aria-labelledby="NavBarDropDown1">
                <a class="dropdown-item" href="/GREFocus/php/logout.php">Logout</a>
              </div>
            </li>';
    //echo $_SESSION['u_fname'];
} else {
    echo '<a class="nav-link" href="login_register.php">Login/Register</a>';
}

?>
      </ul>
    </div>
  </nav>

<div class="jumbotron jumbotron-fluid col-md-11 col-sm-10 mx-auto">
    <div class="container">
        <h1 class="display-3">GRE General Test</h1>
        <div class="divider"></div>
        <br>
        <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;The GRE® General Test is a standardised test that is accepted for admission to various disciplines at many graduate and business schools across the globe. GRE is conducted in two modes; computer-based and paper-based formats. In addition to the GRE general test, there are seven GRE subject tests that evaluate candidates’ knowledge in their respective fields. Aspirants interested in pursuing a higher education, especially Master's degree, specialised Master's course, MBA or a PhD degree can appear for the GRE. It is conducted by the Educational Testing Service (ETS), a US-based organisation.  The GRE Test is available at over 1000 test centres in more than 160 countries. It covers three major sections- Analytical Writing, Verbal Reasoning and Quantitative Reasoning. While Verbal and Quantitative Reasoning are scored on a scale of 130 – 170, analytical writing is scored on a scale of 0-6. </p>
        <br>
        <div class="mx-auto p-2">
            <ul class="nav nav-tabs">
                <li class="nav-item" >
                    <a class="nav-link active show" data-toggle="tab" href="#1a">Test Eligibility</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show" data-toggle="tab" href="#2a">Test Pattern</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show" data-toggle="tab" href="#3a">Test Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link show" data-toggle="tab" href="#4a">Test Fees</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active show" id="1a">
                    <br>
                    <h2>GRE Test Eligibility</h2>
                    <br>
                    <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;There is no GRE Eligibility. Aspirants can apply for the GRE irrespective of age and qualification, as there is no specific GRE eligibility criteria. The candidates, however, have to fulfill the admission criteria for the institutes/ universities they are applying to. As a GRE score is used for admission to postgraduate programmes, students who have completed their undergraduate studies should opt for the examination. GRE score is used for entry to Masters or PhD courses abroad, specifically in universities in US and Canada. Universities in a number of Europan and Asian countries have also started accepting GRE scores for a variety of Graduate programmes. However, aspirants should keep this in mind that it is not the country but the university which requires GRE score. Not all courses require GRE score at all universities. Even within a university, some departments might ask for GRE score while others might not. Hence, candidates are required to first check the admission checklist of the universities before checking the GRE eligibility criteria.</p>
                </div>
                <div class="tab-pane fade" id="2a">
                    <br>
                    <h2>GRE Test Pattern</h2>
                    <br>
                    <div class="table-responsive">
                        <table class="table borderless table-hover" id="table" style="color:black;font-weight:bold;font-size:15px">
                            <thead class="thead-dark">
                                <tr>
                                    <th data-field="Setion" scope="col">Section</th>
                                    <th data-field="Topics" scope="col">Topics</th>
                                    <th data-field="Questions" scope="col">Questions</th>
                                    <th data-field="Timings" scope="col">Timings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Analytical Writing</td>
                                    <td>Analysis of an Issue</td>
                                    <td>1 Topic</td>
                                    <td>30 minutes</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Analysis of an Argument</td>
                                    <td>1 Topic</td>
                                    <td>30 minutes</td>
                                </tr>
                                <tr>
                                    <td>Verbal Section</td>
                                    <td>Section 1</td>
                                    <td>20 Questions</td>
                                    <td>30 minutes</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Section 2</td>
                                    <td>20 Questions</td>
                                    <td>30 minutes</td>
                                </tr>
                                <td>Quantitative Section</td>
                                <td>Section 1</td>
                                <td>20 Questions</td>
                                <td>35 minutes</td>
                                </tr>          
                                <tr>
                                    <td></td>
                                    <td>Section 2</td>
                                    <td>20 Questions</td>
                                    <td>35 minutes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="tab-pane fade" id="3">
                        <br>
                        <h2>GRE Registration</h2>
                        <br>
                        <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;Here are major five steps that candidates should follow to register for GRE:</p>
                        <ul>
                            <li>Create an ETS account for GRE registration</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="3a">
                    <br>
                    <h2>GRE Test Registration</h2>
                    <br>
                    <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;Here are major five steps that candidates should follow to register for GRE:</p>
                    <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;1. Create an ETS account for GRE registration</p>
                    <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;2. Select GRE test type- GRE General or GRE subject test</p>
                    <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;3. Set location and date for the GRE</p>
                    <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;4. Fill academic background information required for GRE registration</p>
                    <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;5. May payment through American Express, Discover, JCB, MasterCard or VISA</p>
                </div> 
                <div class="tab-pane fade" id="4a">
                    <br>
                    <h2>GRE Test Fees</h2>
                    <br>
                    <p class="lead" style="color: black;text-align:justify">&emsp;&emsp;&emsp;GRE General Test Fees is $205.</p>
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