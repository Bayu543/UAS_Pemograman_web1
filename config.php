<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "db_kuliner";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
