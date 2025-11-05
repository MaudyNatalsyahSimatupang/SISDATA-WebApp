<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];

  $stmt = $pdo->prepare("INSERT INTO siswa (nis, nama, kelas, alamat, email, telepon) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->execute([$nis, $nama, $kelas, $alamat, $email, $telepon]);
  header("Location: ../frontend/dashboard.html");
}
?>
