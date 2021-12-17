<?php
session_start();
// jika session belum ada pindahkan ke halaman login
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require_once "functions.php";
// ambil data di url
$id =$_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if(isset($_POST["submit"])){
    if(ubah($_POST)>0){
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href= 'index.php'
            </script>
        ";

    }else{
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href= 'index.php'
        </script>
    ";

    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
<h1>Ubah Data Mahasiswa</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$mhs["id"];?>">
    <input type="hidden" name="gambarLama" value="<?=$mhs["gambar"];?>">
    <ul>
        <li>
            <label for="nrp">NRP: </label>
            <input type="text" name="nrp" id="nrp" require value="<?=$mhs["nrp"];?>">
        </li>
        <li>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" value="<?=$mhs["nama"];?>">
        </li>
        <li>
            <label for="email">E-Mail: </label>
            <input type="text" name="email" id="email" value="<?=$mhs["email"];?>">
        </li>
        <li>
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" id="jurusan" value="<?=$mhs["jurusan"];?>">
            <br>
        </li>
        <li>
            <label for="gambar">Gambar: </label>
            <br>
            <img src="assets/img/<?=$mhs["gambar"]?>" width="150" alt="">
            <br>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
        <button type="sumbit" name="submit">Ubah Data</button>
        </li>

    </ul>


</form>
    
</body>
</html>