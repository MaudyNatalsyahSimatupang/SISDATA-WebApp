<?php
require 'config.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $stmt = $pdo->prepare("DELETE FROM siswa WHERE id=?");
  $stmt->execute([$id]);
  header("Location: ../frontend/dashboard.html");
}
?>
