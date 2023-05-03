<?php
require 'function.php';

//ambil id dari URL
$id = $_GET['id'];
// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li> <img src="img/<?= $mahasiswa['Foto']; ?>"></li>
    <li><?= $mahasiswa['NIM']; ?></li>
    <li><?= $mahasiswa['Nama']; ?></li>
    <li><?= $mahasiswa['Email']; ?></li>
    <li><?= $mahasiswa['Jurusan']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
  </ul>
</body>
</html>