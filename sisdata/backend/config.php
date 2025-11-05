<?php
$host = 'localhost';
$dbname = 'sisdata';
$username = 'root';
$password = ''; // kosong kalau pakai XAMPP

session_start();


try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Koneksi gagal: " . $e->getMessage());
}
?>
