<?php
require_once "../functions.php";
$keyword = $_GET["keyword"];

$query= "SELECT * FROM mahasiswa WHERE
nama LIKE '%$keyword%' OR 
nrp LIKE '%$keyword%' OR 
email LIKE '%$keyword%' OR
jurusan LIKE '%$keyword%'

";
$mahasiswa= query($query);

?>

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