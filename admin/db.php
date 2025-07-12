<?php
$host = 'localhost'; // Ganti dengan host database Anda jika berbeda
$user = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$dbname = 'hmdt'; // Nama database Anda

// Membuat koneksi
$mysqli = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
?>