<?php
session_start();
include 'config.php'; // Koneksi ke database

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php"); // Redirect jika belum login atau bukan admin
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel HMDT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h1>📋 Dashboard Admin HMDT</h1>

  <!-- Menampilkan Profil Pengguna dan Logout -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <span class="me-3">Selamat datang, <strong> ADMIN <?= htmlspecialchars($_SESSION['username']) ?></strong>!</span>
    </div>
    <div>
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
  </div>

  <!-- Navigasi Admin -->
  <ul class="list-group">
  <li class="list-group-item">
    <a href="kelola_pengguna.php"><i class="bi bi-people-fill"></i>👥 Kelola Pengguna</a>
  </li>
  <li class="list-group-item">
    <a href="lihat_pesan.php"><i class="bi bi-envelope"></i>✉️ Lihat Pesan dari Contact</a>
  </li>
</ul>


</body>
</html>
