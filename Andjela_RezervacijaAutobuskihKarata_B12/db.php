<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "autobuska_stanica";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Greška pri povezivanju sa bazom: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>