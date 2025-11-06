<?php
$host = 'db'; // <--- ini penting!
$dbname = 'sisdata';
$username = 'root';
$password = 'root'; // sesuai MYSQL_ROOT_PASSWORD di docker-compose.yml

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Koneksi gagal: " . $e->getMessage());
}
?>
