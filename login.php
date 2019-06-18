<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- New PHP -->
    <?php
      $page_title = 'Login' ;
      // include ( 'includes/header.html');
      // connect to database
      if ( isset( $errors ) && !empty( $errors))
      {
          echo '<p id="err_msg">OMG! There was a problem:<br>';
          foreach ( $errors as $msg )
          {
              echo "-$msg<br>";
          }
          echo  'Please try again or  <a href="register.php">Register</a></p>';
      }
    ?>
    <!-- End New PHP -->

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
     # Create a new connection to the database
     $db = new mysqli('localhost','root','','quiz_show');

     # If there was an error connecting to the database
     if ($db->connect_error) {
         $error = $db->connect_error;
         echo $error;
     }

     # Set the character encoding of the database connection to UTF-8
     $db->set_charset('utf8');

     $email = $_POST['email'];
     $password = hash('sha512',$_POST['password']);

     $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    //  echo $sql;

     $result = $db->query($sql);
     if ($result->num_rows == 1) {

        $_SESSION['loggedin'] = 1;
        $_SESSION['email'] = $email;

        $row = $result->fetch_assoc();
        $_SESSION['first_name'] = $row['first_name'];

        header('location: index1.php');
        
     } else {
         echo '<p>Please try again or go away</p>';
     }
     
    //  var_dump($result);

    }

    ?>

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
<!-- End Navigation -->

<!-- Start Bootstrap Form -->
<div class="container mt-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form class="form-signin" action="login.php" method="POST">
                      <div class="form-label-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                        <label for="email">Email</label>
                      </div>  
                      <div class="form-label-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <label for="pass1">Password</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log In</button>
                      <hr class="my-4">
                      </form>
                        
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- End Bootstrap Form -->

     
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