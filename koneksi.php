<?php
$servername = "localhost"; // Server database
$username = "root"; // Username default untuk XAMPP
$password = ""; // Password default untuk XAMPP (biasanya kosong)
$dbname = "aewene_e-commerce"; // Nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
