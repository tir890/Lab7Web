<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Dasar</title>
</head>
<body>
  <h1>Belajar PHP Dasar</h1>

  <?php
  // --- Bagian 1: Hello World ---
  echo "Hello World<br><br>";

  // --- Bagian 2: Variable ---
  $nim = "0411500400";
  $nama = "Abdullah";
  echo "NIM : " . $nim . "<br>";
  echo "Nama : $nama<br><br>";

  // --- Bagian 3: Predefined Variable ($_GET) ---
  if (isset($_GET['nama'])) {
    echo "Selamat Datang, " . $_GET['nama'];
  } else {
    echo "Selamat Datang Tiara";
  }
  ?>
</body>
</html>
