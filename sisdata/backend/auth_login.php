<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($password, $user['password'])) {
    // Simpan sesi login
    $_SESSION['user'] = $user['email'];
    
    // Redirect ke dashboard
    header("Location: ../frontend/dashboard.html");
    exit;
  } else {
    echo "<script>alert('Email atau password salah!');window.location='../frontend/login.html';</script>";
  }
}
?>
