<?php 
// terkoneksi dengan file functions
require 'functions.php';

// ambil data dari tabel(list mobil)
$mobil = query("SELECT * FROM list_mobil");








?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Mobil</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Tahun</th>
            <th>Deskripsi</th>
            <th>Harga</th>
        </tr>


        <?php $i = 1; ?>
        <?php foreach ($mobil as $mbl): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>Avanza</td>
            <td><img src="./img/<?= $mbl["gambar"] ?>" alt="" width="100"></td>
            <td><?= $mbl["tahun"] ?></td>
            <td><?= $mbl["deskripsi"] ?></td>
            <td><?= $mbl["harga"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>
</html>