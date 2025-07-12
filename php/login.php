<?php
session_start();

// Konfigurasi database
$host = "localhost";
$dbname = "hmdt";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Ambil user berdasarkan nama
    $stmt = $pdo->prepare("SELECT * FROM users WHERE nama = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['nama'];
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        // Cek peran pengguna
        if ($user['role'] === 'admin') {
            header("Location: ../admin/index.php"); // Admin dashboard
        } else {
            header("Location: ../index.php"); // User biasa
        }
        exit();
    } else {
        $error = "Nama atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <div class="login-container">
    <form method="POST" class="login-box">
      <h2>Login</h2>
      <?php if ($error): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
      <?php endif; ?>
      <input type="text" name="username" placeholder="username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="email" name="email" placeholder="email" required>
      <button type="submit">Masuk</button>
      <p class="register-link">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </form>
  </div>
</body>
</html>
