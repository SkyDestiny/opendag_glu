<?php

// $server = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "bureau portfolio";

$server = "localhost";
$db_user = "u532431_BPW";
$db_pass = "Bpw123";
$db_name = "u532431_BPW";

try{
    $conn = mysqli_connect($server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}?>