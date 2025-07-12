<?php
include 'config.php';

// Ambil data yang akan diedit
$id = $_GET['id'];
$stmt = $mysqli->prepare("SELECT * FROM tasks WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$task = $result->fetch_assoc();

// Proses update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $mysqli->real_escape_string($_POST['title']);
  $description = $mysqli->real_escape_string($_POST['description']);
  
  $updateStmt = $mysqli->prepare("UPDATE tasks SET title = ?, description = ? WHERE id = ?");
  $updateStmt->bind_param("ssi", $title, $description, $id);
  
  if ($updateStmt->execute()) {
    header("Location: index.php?success=1");
  } else {
    echo "Error: " . $updateStmt->error;
  }
}
?>

<!-- Form Edit -->
<form method="POST" action="edit.php?id=<?= $id ?>">
  <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
  <textarea name="description"><?= htmlspecialchars($task['description']) ?></textarea>
  <button type="submit">💾 Simpan</button>
</form>