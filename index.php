<?php
error_reporting(0);
session_start(); 
$conn = mysqli_connect('localhost', 'root', '', 'db_mycake');
$result = mysqli_query($conn, 'SELECT * FROM cake_tbl');

$id = $_SESSION['user_id']; 
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
    <title>My Cake</title>
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
          <?php if ($id): ?>
            <a class="dropdown-item" href="logout.php">Logout</a>
          <?php else: ?>
            <a class="dropdown-item" href="login.php">Login</a>
          <?php endif ?>
        </div>
      </li>
      </div>
    </nav>
    <div class="container">
        <section class="home">
            <div class="row">
                <div class="col-md-6 home-detail">
                   <h2>welcome to <br> world of cake!</h2>
                   <p class="mb-3">find your favorite cake here!</p>
                   <button class="btn btn-primary">explore</button> 
                </div>
                <div class="col-md-6 home-img">
                   <img src="img/doughnut-2.jpeg"> 
                </div>        
            </div>
        </section>

        <section class="services">
            <div class="row">
                <div class="col text-center">
                    <h2>Our Service</h2>
                    <p>we services many event like</p>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <div class="card services-card text-center">
                    <div class="services-content">
                      <h3 class="mb-4">Party Cake</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <hr />
                    <button class="btn btn-primary">explore</button>
                 </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <div class="card services-card text-center">
                    <div class="services-content">
                      <h3 class="mb-4">Birthday Cake</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <hr />
                    <button class="btn btn-primary">explore</button>
                 </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <div class="card services-card text-center">
                    <div class="services-content">
                      <h3 class="mb-4">Desert</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <hr />
                    <button class="btn btn-primary">explore</button>
                 </div>
                </div>
            </div>
        </section>

        <section class="menu">
            <div class="row">
                <div class="col text-center">
                    <h2>My Menu</h2>
                    <p>found your favorite cake here!</p>
                </div>
            </div>
            <div class="row">
                
                <?php while ($cake = mysqli_fetch_assoc($result)) : ?>
                  <div class="col-sm-6 col-md-3 col-lg-3 mb-4">
                    <div class="card menu-card text-center">
                        <div class="menu-img">
                            <img src="img/<?= $cake["cake_photo"]; ?>.jpeg">
                        </div>
                        <div class="menu-desc mt-3">
                            <h4><a href="detail.php?id=<?= $cake["id"]; ?>"><?= $cake["cake_name"]; ?></a></h4>
                            <p>Rp. <?= number_format($cake["cake_price"]); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </section>

    </div>

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
                        <i class='bx bxl-facebook-square'></i>
                        <i class='bx bxl-instagram-alt' ></i>
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
    <script src="script/sweetalert2.all.min.js"></script>
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