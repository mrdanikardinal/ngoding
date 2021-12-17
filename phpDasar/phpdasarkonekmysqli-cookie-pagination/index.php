<?php
session_start();
require "functions.php";
// jika session belum ada pindahkan ke halaman login
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

// pagination
// konfigurasi
// fungsi connt() untuk menghitung banyaknya data
// $jumlahData=mysqli_num_rows($result); menghitung data
// round()pembulatan kebilangan bulat terdekat jika 1.5 dibulatkan ke 2
// floor()pembulatan kebilangan bulat kebawah
// ceil()pembulatan kebilangan bulat keatas

$jumlahDataPerhalaman =2;
$jumlahData= count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman= ceil($jumlahData/$jumlahDataPerhalaman);
//if dan else manual
// if(isset($_GET["halaman"])){
//     $halamanAktif= $_GET["halaman"];
// }else{
//     $halamanAktif=1;
// }
//if dan else operator ternary
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] :1;
$awalData=($jumlahDataPerhalaman*$halamanAktif)- $jumlahDataPerhalaman;




$mahasiswa=query("SELECT * FROM mahasiswa ORDER BY id DESC LIMIT $awalData,$jumlahDataPerhalaman");

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
    <input type="text" name="keyword" size="60" autofocus placeholder="Masukan Keyword Pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    <br>
    </form>
    <br>
    <!-- navigasi -->
    <!-- tombol prev -->
    <?php if($halamanAktif>1):?>
    <a href="?halaman=<?=$halamanAktif - 1;?>">&laquo</a>
    <?php endif;?>
    <?php for($i=1; $i<=$jumlahHalaman;$i++):?>
        <?php if($i==$halamanAktif): ?>
        <a href="?halaman=<?=$i;?>" style="font-weight:bold; color:green; font-size:25px;"><?=$i;?></a>
        <?php else: ?>
        <a href="?halaman=<?=$i;?>"><?=$i;?></a>
        <?php endif;?>
    <?php endfor;?>
    <!-- tombol next -->
    <?php if($halamanAktif<$jumlahHalaman):?>
    <a href="?halaman=<?=$halamanAktif + 1;?>">&raquo</a>
    <?php endif;?>
    <!-- navigasi -->
    <br>
    <br>
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
</body>
</html>