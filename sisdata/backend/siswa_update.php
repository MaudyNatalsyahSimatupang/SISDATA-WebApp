<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];

  $stmt = $pdo->prepare("UPDATE siswa SET nis=?, nama=?, kelas=?, alamat=?, email=?, telepon=? WHERE id=?");
  $stmt->execute([$nis, $nama, $kelas, $alamat, $email, $telepon, $id]);
  header("Location: ../frontend/dashboard.html");
}
?>
