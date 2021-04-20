<?php
session_start();
//-----
require("config/conn.php");
//-----
$kip = "SELECT * FROM producten";
$result = $conn->query($kip);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Bureau</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">

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
            <li>
              <?php 
                if (isset($_SESSION['username'])){
                  echo '<a href="../logout.php" class="text-white">Logout and go to home</a>';
                }
              ?>
            </li>
            <li>
              <?php 
                if (isset($_SESSION['username'])){
                  echo '<a href="../logout2.php" class="text-white">Logout and go to login</a>';
                }
              ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


<!-- Zonder openklap -->

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="https://www.glu.nl/" target="BLANK_" class="navbar-brand d-flex align-items-center">
        <img src="../assets/img/bureaulogo.jpg" width="40" height="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/>
        <strong>Bureau</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
    
<!-- Overzicht portfolio's -->

    <div>
        <?php
            if(isset($_SESSION['loggedinadmin'])){ echo "U bent als admin ingelogt met de username: " . $_SESSION['username'];}
        ?>
    </div>
    <h2>events</h2>
    <p align="right"><a href="toevoegen.php">Portfolio toevoegen</a></p>
<?php

echo "
    <table>
    <tr>
        <th>Titel</th>
        <th>link</th>
        <th>Beschrijving</th>
        <th>Datum</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>";



$results = "SELECT * FROM `producten`";
$result = mysqli_query($conn, $results) or die(mysqli_error($conn));
while ($row = $result->fetch_assoc()) {
        // Foto toevoegen code
        echo "<tr>

            <td>" . $row['titel'] . "</td>
            <td>" . $row['url'] . "</td>
            <td>" . $row['beschikbaar'] . "</td>
            <td>" . $row['prijs'] . "</td>
            <td><a href=\"wijzigen.php?id=".$row['id']."\">Update</a></td>
            <td><a href=\"verwijder.php?id=".$row['id']."\">Delete</a></td>
        </tr>";



}
echo "</table>";
?>

<!-- Footer -->

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1 align-items-start">
      <a href="#">Back to top</a>
    </p> 
    <p class="mb-1">Theme designed by <a href="http://u532431.gluweb.nl/portfolio/" target="BLANK_">SkyDestiny</a> &copy;. Bureau website. All Rights Reserved.</p>
  </div>
</footer>
    <script src="../assets2/dist/js/bootstrap.bundle.min.js"></script> 
    <script type="text/javascript" src="assets/js/login.js"></script>
  </body>
</html>