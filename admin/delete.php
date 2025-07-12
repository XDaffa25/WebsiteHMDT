<?php
include 'config.php';

$id = $_GET['id'];
$stmt = $mysqli->prepare("DELETE FROM tasks WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
  header("Location: index.php?success=1");
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$mysqli->close();