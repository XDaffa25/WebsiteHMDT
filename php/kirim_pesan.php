<?php
session_start();

// Jika belum login, redirect ke halaman login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../php/login.php");
    exit();
}

// Koneksi ke database
$host = "localhost";
$dbname = "hmdt";       // Ganti sesuai nama database kamu
$dbuser = "root";        // Ganti jika pakai user lain
$dbpass = "";            // Password kosong jika default XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama    = $_POST['nama'] ?? '';
    $telepon = $_POST['telepon'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subjek  = $_POST['subjek'] ?? '';
    $pesan   = $_POST['pesan'] ?? '';

    // Validasi sederhana
    if ($nama && $telepon && $email && $subjek && $pesan) {
        // Masukkan ke database
        $stmt = $pdo->prepare("INSERT INTO pesan (nama, telepon, email, subjek, pesan) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nama, $telepon, $email, $subjek, $pesan]);

        // Redirect kembali ke halaman contact dengan status sukses
        header("Location: ../contact.php?status=sukses");
        exit();
    } else {
        header("Location: ../contact.php?status=error");
        exit();
    }
} else {
    echo "Akses tidak sah.";
}
?>
