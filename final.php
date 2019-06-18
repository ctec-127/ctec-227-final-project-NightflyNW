<?php include "inc/mysqli_connect.inc.php"; ?>
<?php session_start(); ?>
<?php
	//Create Select Query
	$query="select * from shouts order by time desc limit 100";
  // $shouts = mysqli_query($con,$query);
  $shouts = mysqli_query($db,$query);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Game of Groans</title>
</head>
<body>

  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Game of Groans - Rock Trivia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <br>
    <br>
    <br>
    <main>
	    <div class="container">
        <div class="row">
          <div class="col">
            <h2>You are Done!</h2>
              <p>Congrats! You have completed the test</p>
              <h3>Final score: <?php echo $_SESSION['score']; ?></h3>
              <!-- <a href="question.php?n=1" class="start">Take Test Again</a> -->
              <a href="question.php?n=1" class="btn btn-info" role="button">Take Quiz Again</a>
              <?php session_destroy(); ?></div>
          
          <!-- Slideshow Starts -->
          <div class="col">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/vacationquestion.jpg" alt="Question #1">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/ericclapton.jpg" alt="Question #2">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/marysclub.jpg" alt="Question #3">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/letitbe1.jpg" alt="Question #4">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- Slide Show Ends -->
            </div>
            <br>

            
          </div>
        </div>
	    </div>
    </main>
      <!-- Footer -->
      <footer class="py-2 bg-dark fixed-bottom">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; 2019 CS Web Design Limited</p>
          
        </div>
      </footer>



<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>