<?php
// Konfigurasi Database
$db_host = 'localhost';
$db_user = 'root'; // User default XAMPP
$db_pass = '';     // Password default XAMPP
$db_name = 'dbcv';

// Membuat Koneksi
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Cek Koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mengatur charset
$conn->set_charset("utf8mb4");

// Memulai session untuk login
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>