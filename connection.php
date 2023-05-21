<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leon_database";
$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("connectionfaild:" . mysqli_connect_error());
}
?>