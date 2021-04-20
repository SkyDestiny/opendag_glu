<?php
session_start();
//-----
require("config/connect.php");
//-----
$kip = "SELECT * FROM admin";
$result = $conn->query($kip);
?>

<!--   <div id="header">
		<nav id="navi">
    		<a id="pages" href="index.php">Home</a>
        <a id="pages" href="login.php">Login</a>
		</nav>	
	</div>
 -->
  <div id="my-content">
		<?php
			if(isset($_SESSION['loggedincustomer'])){ echo "U bent als customer ingelogt met het emailadres: " . $_SESSION['email']; echo '<br><a href="logout.php">logout</a>';}



            $results = "SELECT * FROM `producten`";
            $result = mysqli_query($conn, $results) or die(mysqli_error($conn));
            while ($row = $result->fetch_assoc()) {
        ?>

    <div class="my-eventCard">
      <div class="my-eventCardPicture">
        <?php
        	$id = $row['id'];
        	$directory = "view/img/producten/$id/";
			    $files = scandir ($directory);
			    $firstFile = $directory . $files[2];
        	echo "<img src='$firstFile'>";
        ?>
      </div>
      <div class="my-eventCardButton">
      <center>
      

      <?php
          echo "<h5>" . $row['titel'] . "</h5>
               <a href='" . $row['url'] . "' target=_blank >" . $row['url'] . "</a>
               <p>" . $row['beschikbaar'] . "</p>
               <p>" . $row['prijs'] . "</p>";
        
      ?>



       </center>
      </div>
    </div>

  <?php } ?>

  </div>
