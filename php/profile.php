<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: php/login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center font-sans">

  <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md text-center">
    <h1 class="text-2xl font-bold text-orange-900 mb-4">
      Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>!
    </h1>
    <p class="text-gray-700 mb-6">Ini adalah halaman profil kamu.</p>
    
    <a href="../index.php"
       class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-full transition">
      Kembali
    </a>
  </div>

</body>
</html>
