<?php
require '../backend/config.php';
if (!isset($_SESSION['user'])) {
  header("Location: login.html");
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SISDATA - Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div class="container">
    <h1>SISDATA</h1>
    <p class="subtitle">Sistem Data Siswa | SMA Swasta Cinta Kasih</p>
    <table border="1" width="100%" cellpadding="10">
      <thead style="background-color:#a1b1c7;color:white;">
        <tr>
          <th>NIS</th>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>No Telepon</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody id="tabel-siswa"></tbody>
    </table>
    <a href="tambah.html"><button>Tambah Data</button></a>
    <a href="../backend/auth_logout.php"><button>Logout</button></a>
  </div>
</body>
</html>
