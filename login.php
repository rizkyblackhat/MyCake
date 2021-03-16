<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_mycake");


if ( isset($_POST["submit"]) ) {

  $username = $_POST["username"];
  $password = $_POST["password"]; 
  
  $result = mysqli_query($conn, "SELECT * FROM user_tbl WHERE username = '$username'");
  $user = mysqli_fetch_assoc($result);
  $cek = mysqli_num_rows($result);
  $id = $user["id"];

  if ( $cek == 1 && $password == $user["password"] ) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['username'];
    header("location: index.php");
  } else {

  } 
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- icon -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My Cake - Login</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">MyCake</a>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="cart.php">Cart</a>
          <a class="dropdown-item" href="checkout.php">Checkout</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      </div>
    </nav>

    <section class="login">
      <div class="container">
          <div class="login-box">
            <h1>Log in</h1>
            <hr>
            <!-- Form -->
            <form action="" method="post">
              <!-- Full Name -->
              <div class="form-group">
                <label for="name">username</label>
                <input type="text" name="username">
              </div>
              <!-- Password -->
              <div class="form-group">
                <label for="password1">password</label>
                <input type="password" name="password">
              </div>
              <a href="register.php">create new account</a><br>
              <button type="submit" name="submit" class="btn btn-primary mt-3">Login</button>
            </form>
            </div>
          <!-- Error/Success Message -->
          <div class="message-container">
            <h3 id="message"></h3>
          </div>
      </div>
    </section>

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
          <div class="row justify-content-center">
              <div class="col-12">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <h5>MyCake Shoop</h5>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.</p>
                        <i class='bx bxs-facebook mr-3'></i>
                        <i class='bx bxs-instagram mr-3'></i>
                      </div>
                      
                      <div class="col-12 col-lg-3">
                        <h5>Work Time</h5>
                        <ul class="list-unstyled">
                          <li>Every Day: </li>
                          <li>14.00am - 22.00pm</li>
                        </ul>
                      </div>
                      <div class="col-12 col-lg-3">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled">
                          <li>Bandung, West-Java</li>
                          <li>Indonesia</li>
                          <li>+62 82-222-343-987</li>
                          <li>MyCake@Shoop.com</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row border-top justify-content-center align-items-center pt-4 ">
            <div class="col-auto text-gray-500 font-weight-light">
                2021 Copyright MyCake Shoop • All rights reserved 
            </div>
          </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>