<?php include 
"database.php"; 
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
    <title>Registration Page</title>
</head>
<body>

<?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            # Create a new connection to the database
            $mysqli = new mysqli('localhost','root','','quiz_show');

            # If there was an error connecting to the database
            if ($mysqli->connect_error) {
                $error = $mysqli->connect_error;
                echo $error;
            }

            # Set the character encoding of the database connection to UTF-8
            $mysqli->set_charset('utf8');

            $email = $_POST['email'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $password = hash('sha512',$_POST['password']);

            $sql = "INSERT INTO user (email,first_name,last_name,password) 
                    VALUES('$email','$first_name','$last_name','$password')";
            // echo $sql;
            $result = $mysqli->query($sql);

            if (!$result) {
                echo "<h3>There was a problem registering your account</h3>";
            } else {
                echo "<h3>You are now ready to go!</h3>";
            }
        }
    ?>

  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Game of Grones - Rock Trivia</a>
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
    <div class="container mt-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                    <form class="form-signin" action="index.php" method="POST">
                     <!-- scott stopped here page 145  -->
                      <div class="form-label-group">
                        <input type="text" id="first_name" name="first_name" class="form-control" required autofocus>
                        <label for="first_name">Frist Name</label>
                      </div>

                      <div class="form-label-group">
                        <input type="text" id="last_name" name="last_name" class="form-control" required autofocus>
                        <label for="last_name">Last Name</label>
                      </div>

                      <div class="form-label-group">
                        <input type="email" id="email" name="email" class="form-control" required autofocus>
                        <label for="email">Email address</label>
                      </div>  
        
                      <div class="form-label-group">
                        <input type="password" id="password" name="password" class="form-control" required>
                        <label for="password">Password</label>
                      </div>
<!--         
                      <div class="form-label-group">
                        <input type="password" id="pass2" name="pass2" class="form-control" placeholder="Confirm Password" required>
                        <label for="pass2">Confirm Password</label>
                      </div> -->

                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                      <hr class="my-4">
                      </form>
                      <?php
                            echo '<p class="card-title text-center">If you have an account  <a href="login.php">Login Here</a></p>';
                      ?>
                      <!-- <p class="card-title text-center">Have an account? Log In</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!-- Footer -->
      <footer class="py-2 bg-dark fixed-bottom">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; 2019 Scott Altom Web Design Limited</p>
          
        </div>
      </footer>



<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>