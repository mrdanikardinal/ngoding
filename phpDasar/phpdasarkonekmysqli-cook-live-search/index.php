<?php
session_start();
require "functions.php";
// jika session belum ada pindahkan ke halaman login
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

$mahasiswa=query("SELECT * FROM mahasiswa ORDER BY id DESC");

// jika tombol cari ditekan query baca database akan ditimpa berdasarkan kategori yang dicari
if (isset($_POST["cari"])){

    $mahasiswa=cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan koneksi php ke mysqli</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Halaman Daftar Mahasiswa dari database Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <hr>
    <form action="" method="post">
        <input type="text" name="keyword" size="60" autofocus placeholder="Masukan Keyword Pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
    <br>
    </form>
    <br>
    <br>
    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $angka=1;?>
            <?php foreach($mahasiswa as $row) :?>
            <tr>
                <td><?=$angka;?></td>
                <td>
                    <a href="ubah.php?id=<?=$row["id"];?>">Ubah</a>|
                    <a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Akan Dihapus?');">Hapus</a>
                </td>
                <td>
                <img src="assets/img/<?=$row["gambar"];?>" width="50" alt="">
                </td>
                <td>201320145</td>
                <td><?=$row["nama"];?></td>
                <td><?=$row["email"];?></td>
                <td><?=$row["jurusan"];?></td>
            </tr>
            <?php $angka++;?>
        <?php endforeach;?>
        </table>
    </div>
    <script src="js/script-live-search.js"></script>
</body>
</html>