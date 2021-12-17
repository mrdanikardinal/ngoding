<?php
// koneksi database
// butuh parameter
//1. host 2. username 3.password 4. namadatabase
$conn=mysqli_connect("localhost","root","","phpdasar");
// ambil dari data dari table mahasiswa /query
// butuh parameter 1.koneksi 2.query
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
// ambil data dari object result / mahasiswa(fetch);
// ada 4 cara
//1. mysqli_fetch_row(); // mengembalikan array numerik
//2. mysqli_fetch_assoc(); // mengembalikan array associative
//3. mysqli_fetch_array(); // mengembalikan doble numerik dan associative
//4. mysqli_fetch_object(); // mengembalikan data object

// while ($mhs=mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

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
    <h1>Halaman Daftar Mahasiswa dari database Mahasiswa</h1>
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
        <?php while($row= mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?=$angka;?></td>
            <td>
                <a href="">Ubah</a>|
                <a href="">Hapus</a>
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
        <?php endwhile;?>
    
    </table>
</body>
</html>