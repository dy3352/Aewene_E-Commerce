<?php
$host = "localhost";
$username = "root"; // username default XAMPP
$password = ""; // password default XAMPP
$database = "aewene_ecommerce"; // nama database yang telah Anda buat

// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
