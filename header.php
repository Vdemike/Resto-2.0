<?php
  ob_start();
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <title>My login page</title>
</head>
<body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="./index.php">
            <img src="./images/logo.png" style="height: 50px;" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item active">
              <a class="nav-link h1-font" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h1-font" href="./restaurant.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h1-font" href="./menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h1-font" href="./reviews.php">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h1-font" href="./contact.php">Contact</a>
            </li>
            <p>
            <div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    My Account
  </button>
  <ul class="dropdown-menu dropdown-menu-dark text-center">
        <li class="nav-item">
              <a class="nav-link h1-font" href="./Booking.php">Booking</a>
        </li>
  <?php
         if (isset($_SESSION['userUid'])) {
          echo "<li class='nav-item'><a class='nav-link h1-font' href='logout.php'>Logout</a></li>";
         }
         else {
           echo "<li class='nav-item'><a class='nav-link h1-font' class='btn btn-warning' href='login.php'>Log in</a></li>";
         }
       ?>
       <?php
               if (isset($_SESSION['userUid'])) {
          if((isset($_SESSION['role']) && $_SESSION['role'] == "admin")){
            // header('Location: admin.php?welcome=admin');
            echo "<li class='nav-item'><a href='./admin.php' class='btn btn-warning'> Admin settings </a></li>";
          }else{
            // header('Location: index.php?not=admin');
          echo "<li class='nav-item'><a href='./booking.php' class='btn btn-warning'>Hello, ".$_SESSION['userUid']."</a></li>";
         }} 
         else {
          echo "<a href='./signup.php' class='btn btn-warning'>Sign up</a></li>";
         }
       ?>
  </ul>
</div>

          </ul>
        </div>
        


    
          </ul>
      </nav>
    <style>
      .slide-1 {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("./images/amirali-mirhashemian-v2z6Yhp_6Gc-unsplash.jpg");
background-size: cover;
}

.slide-2 {
background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("./images/ivan-torres-MQUqbmszGGM-unsplash.jpg");
background-size: cover;
}

.navbar-nav {
    font-size: 20px; 
}

.intro-text {
    margin-bottom: 25px;
}


body {     
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("./images/amirali-mirhashemian-v2z6Yhp_6Gc-unsplash.jpg");
    background-size: cover;
    
}

.h1-font {
    font-family: 'Lobster', sans-serif;
}
    </style>