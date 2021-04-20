<?php
//-----
require("config/connect.php");
//-----
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Bureau</title>

  <!-- Bootstrap core CSS -->
  <link href="assets2/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">

<body>
    
<!-- Dropdown menu -->

<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Glu text - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Pages</h4>
          <ul class="list-unstyled">
            <li><a href="index.php" class="text-white">Home</a></li>
            <li><a href="login.php" class="text-white">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<!--   Zonder openklap -->

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="https://www.glu.nl/" target="BLANK_" class="navbar-brand d-flex align-items-center">
        <img src="assets/img/bureaulogo.jpg" width="40" height="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/>
        <strong>Bureau</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<!-- Login -->

<section class="my-sec">
 
    <div class="my-container">
        <div class="my-taps">
            <button class="my-tap-btn my-active" id="login">Login</button>
            <div class="my-line"></div>
        </div>
        <div class="my-form">
          <div class="my-login-form">
             <h1>Login here</h1>
             <form method="POST" action="src/authlogincustomer.php" >
                 <div class="my-form-group">
                    <label>Email</label>
                    <input type="text" class="my-form-control" name="email" required>
                 </div>
                 <div class="my-form-group">
                     <label>Password</label>
                     <input type="password" class="my-form-control" name="password" required>
                 </div>
                 <center><p>Admin? <a href="adminLogin.php">Click here!</a></p></center>
                 <div class="my-form-group">
                     <input type="submit" class="my-form-control submit-btn" value="Login" >
                 </div>
             </form>
          </div>
    </div>
</section>

<!-- Footer -->

<footer class="text-muted py-5">
  <div class="container">
<!--<p class="float-end mb-1 align-items-start">
      <a href="#">Back to top</a>
    </p> -->
    <p class="mb-1">Theme designed by <a href="http://u532431.gluweb.nl/portfolio/" target="BLANK_">SkyDestiny</a> &copy;. Bureau website. All Rights Reserved.</p>
  </div>
</footer>
    <script src="assets2/dist/js/bootstrap.bundle.min.js"></script> 
    <script type="text/javascript" src="assets/js/login.js"></script>
  </body>
</html>