<?php
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$result = $mysqli->query("SELECT * FROM pesan");
?>

<h2>Pesan dari Contact</h2>
<table border="1" cellpadding="10">
  <tr><th>Nama</th><th>Email</th><th>Pesan</th></tr>
  <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= htmlspecialchars($row['nama']) ?></td>
      <td><?= htmlspecialchars($row['email']) ?></td>
      <td><?= htmlspecialchars($row['pesan']) ?></td>
    </tr>
  <?php endwhile; ?>
</table>
