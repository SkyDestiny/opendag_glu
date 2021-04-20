<?php
session_start();
//-----
require("config/connect.php");
//-----
$kip = "SELECT * FROM admin";
$result = $conn->query($kip);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Bureau</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="assets2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/yeet.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
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

<main>

<!-- Intro text -->

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Studenten portfolio overzicht</h1>
        <p class="lead text-muted">Glu text - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      </div>
    </div>
  </section>

<!-- Portfolio cards -->
 <div class="album py-5 bg-light">
    <div class="container">
       <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
              if(isset($_SESSION['loggedincustomer'])){ echo "U bent als customer ingelogt met het emailadres: " . $_SESSION['email']; echo '<br><a href="logout.php">logout</a>';}
                  ?>
                  <?php
                    $results = "SELECT * FROM `producten`" ;
                    $result = mysqli_query($conn, $results) or die(mysqli_error($conn));
                    while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col">
                  <div class="card shadow-sm">
        <!--                 Placeholder afbeelding -->
                      <?php
                        $id = $row['id'];
                        $directory = "view/img/producten/$id/";
                        $files = scandir ($directory);
                        $firstFile = $directory . $files[2];
                        echo "<img class='foto bd-placeholder-img card-img-top' src='$firstFile'  height='225'>";
                      ?>
                    <div class="card-body">
        <!--               Placeholder url beschrijving(beschikbaar) datum(prijs) -->
                      <p class="card-text">         
                        <?php
                            echo "<h5>" . $row['titel'] . "</h5>
                           <a href='" . $row['url'] . "' target=_blank >" . $row['url'] . "</a>
                           <p>" . $row['beschikbaar'] . "
                           <br>" . $row['prijs'] . "</p>";
                        ?>
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
        <!--                 <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small> -->
                      </div>
                    </div>
                  </div>
                </div>
          <?php } ?>
      </div>
    </div>
   </div>

</main>

<!-- Disclaimers -->

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1 align-items-start">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Theme designed by <a href="u532431.gluweb.nl/portfolio" target="BLANK_">SkyDestiny</a> &copy;. Bureau website. All Rights Reserved.</p>
  </div>
</footer>
    <script src="assets2/dist/js/bootstrap.bundle.min.js"></script> 
  </body>
</html>