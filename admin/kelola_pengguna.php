<?php
include 'config.php';

$result = $mysqli->query("SELECT * FROM users ORDER BY id ASC");
?>

<h2>Kelola Pengguna</h2>
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>ID</th>
    <th>Username</th>
  </tr>
  <?php 
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['nama']) ?></td>
    </tr>
    <?php endwhile; 
  } else { ?>
    <tr>
      <td colspan="3">Tidak ada data pengguna</td>
    </tr>
  <?php } ?>
</table>