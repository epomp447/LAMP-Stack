<?php
$db_name = "users";
$mysqli_username = "root";
$mysqli_password = "";
$mysqli_host = "localhost";


// $conn will contain a resource link to the database
// @ keeps the error from showing in the browser

$conn = @mysqli_connect($mysqli_host, $mysqli_username, $mysqli_password, $db_name)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>