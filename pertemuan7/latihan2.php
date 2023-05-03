<?php 
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Foto</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
     foreach($mahasiswa as $mhs) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mhs['Foto']; ?>" width="60"></td>
      <td><?= $mhs['NIM']; ?></td>
      <td><?= $mhs['Nama']; ?></td>
      <td><?= $mhs['Email']; ?></td>
      <td><?= $mhs['Jurusan']; ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>