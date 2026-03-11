<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "skyresearch";

$conn = mysqli_connect($host, $user, $password, $database, 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>