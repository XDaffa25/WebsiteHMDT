<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $mysqli->real_escape_string($_POST['title']);
  $description = $mysqli->real_escape_string($_POST['description'] ?? '');

  $stmt = $mysqli->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
  $stmt->bind_param("ss", $title, $description);
  
  if ($stmt->execute()) {
    header("Location: index.php?success=1");
  } else {
    echo "Error: " . $stmt->error;
  }
  
  $stmt->close();
}

$mysqli->close();

$stmt = $mysqli->prepare("INSERT INTO tasks (title, description, user_id) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $title, $description, $_SESSION['user_id']);
?>