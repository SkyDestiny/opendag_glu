<?php
session_start();
// establish DB connection
require "../config/connect.php";
// Check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Vul beide velden in!');
}
// SQL injection prevention.
if ($stmt = $conn->prepare('SELECT id, password FROM users WHERE emailadres = ?')) {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Stores the result so it can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now verify the password.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has loggedin!
            session_regenerate_id();
            $_SESSION['loggedinuser'] = TRUE;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['id'] = $id;
            header('Location: ../adminpanel/adminPanel.php');
        } else {
            echo 'Incorrect password! You will be redirected in 5 seconds.';
            header('Refresh: 5; ../login.php');
        }
    } else {
        echo 'Incorrect E-mailadres! You will be redirected in 5 seconds.';
        header('Refresh: 5; ../login.php');
    }
	$stmt->close();
}
?>