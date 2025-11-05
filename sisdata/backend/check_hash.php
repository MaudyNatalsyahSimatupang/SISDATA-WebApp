<?php
$hash = '$2y$10$uJeP6gRBTtTCh98JQ1m/1epb7f4UzA2fV7jUt2h9E8bZ2fLBm4hwe';
$password = '12345'; // ganti sesuai password yang mau kamu pakai

if (password_verify($password, $hash)) {
  echo "✅ Password cocok!";
} else {
  echo "❌ Password salah!";
}
?>
