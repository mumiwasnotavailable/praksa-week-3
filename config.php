<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sportbase_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Greška pri povezivanju s bazom: " . mysqli_connect_error());
}
?>