<?php
// Mulai sesi hanya jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'hmdt';

// Membuat koneksi ke MySQL
$mysqli = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($mysqli->connect_error) {
    die("Koneksi database gagal: " . $mysqli->connect_error);
}

// Set charset agar tidak ada masalah encoding
$mysqli->set_charset("utf8mb4");
?>
