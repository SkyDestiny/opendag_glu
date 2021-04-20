<?php
session_start();
  require_once('config/conn.php');

if(isset($_POST['delete']))
{
    $delete_Query = "DELETE FROM `producten` WHERE `id` = '".$_GET['id']."'";
    try{
        $delete_Result = mysqli_query($conn, $delete_Query);

        if($delete_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Data Deleted';
                echo '<script> window.location.href="adminPanel.php"; </script>';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
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



            <form action="" method="post">
                Weet je zeker dat deze wilt verwijderen?
            <div>
                <input type="submit" name="delete" value="Delete">
                <input type="button" name="cancel" value="Terug" onclick="window.location.href='adminPanel.php';">
            </div>
            </form>
        </body>
 </html>
