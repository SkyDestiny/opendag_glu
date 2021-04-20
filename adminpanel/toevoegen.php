<?php
session_start();
  require_once('config/conn.php');

if(isset($_POST['insert'])) {
    $insert_Query = "INSERT INTO `producten` (`titel`, `url`, `beschikbaar`, `prijs`)

                   VALUES ('".$_POST['titel']."',  '".$_POST['url']."', '".$_POST['beschikbaar']."', '".$_POST['prijs']."')";
echo $insert_Query;

    try{
        $insert_Result = mysqli_query($conn, $insert_Query);

        if($insert_Result) {
            if(mysqli_affected_rows($conn) > 0) {
                echo 'Data Inserted';
                $id = mysqli_insert_id($conn);
                mkdir('../view/img/producten/' . $id . '/');

                //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

                // Count # of uploaded files in array
                $total = count($_FILES['upload']['name']);

                // Loop through each file
                for( $i=0 ; $i < $total ; $i++ ) {

                  //Get the temp file path
                  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

                  //Make sure we have a file path
                  if ($tmpFilePath != ""){
                    //Setup our new file path
                    $newFilePath = "../view/img/producten/". $id . '/' . $_FILES['upload']['name'][$i];

                    //Upload the file into the temp dir
                    move_uploaded_file($tmpFilePath, $newFilePath);
                  }
                }
                echo '<script> window.location.href="adminPanel.php"; </script>';
            }else{
                echo 'Data not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error insert'.$ex->getMessage();
    }
}
?>

<!DOCTYPE html>
 <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.79.0">

            <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
                <!-- Bootstrap core CSS -->
                <link href="../assets2/dist/css/bootstrap.min.css" rel="stylesheet">

            <title>Admin panel</title>
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


            <form enctype='multipart/form-data' action="" method="post">
                <input name="upload[]" type="file" multiple="multiple" required=""><br><br>
                <input type="text" name="titel" placeholder="titel" required=""><br><br>
                <input type="url" name="url" placeholder="link" required=""><br><br>
                <textarea name="beschikbaar" placeholder="beschrijving" required=""></textarea><br><br>
                <input type="date" name="prijs" placeholder="datum" required=""><br><br>
            <div>
              <input type="submit" name="insert" value="Add">
              <input type="button" name="cancel" value="Terug" onclick="window.location.href='adminPanel.php';">
            </div>
            </form>
        </body>
 </html>
