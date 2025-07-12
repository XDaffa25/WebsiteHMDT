<?php
// Menghubungkan ke database
include 'db.php'; // Pastikan file db.php ada di direktori yang sama

// Inisialisasi variabel untuk menyimpan pesan
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data pengguna ke database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    // Eksekusi query dan cek apakah berhasil
    if ($mysqli->query($query) === TRUE) {
        $message = "Registrasi berhasil! Silakan <a href='login.php'> login </a>.";
    } else {
        $message = "Error: " . $query . "<br>" . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 300px;
            margin: auto;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
        button {
            padding: 10px;
            width: 100%;
        }
        .message {
            color: green;
            text-align: center;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Registrasi</h2>
    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>