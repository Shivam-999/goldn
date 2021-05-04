<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "goldn";
$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn) {
  die("Error". mysqli_error());
}
?>
