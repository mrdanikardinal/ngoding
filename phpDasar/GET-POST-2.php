<?php
// cek apakah tidak ada data data $_GET;

if (!isset($_GET["nama"]) || 
    !isset($_GET["npm"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["phone"]) ||
    !isset($_GET["gambar"]) 

    ){
    // jika $_GET belum diset/ menerima input
    // lakukan redirect

    header("Location: GET-POST.php");
    exit;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan GET-PHP-2</title>
</head>
<body>
<h1>Detail Data Mahasiswa</h1>

<ul>
<li><img src="<?=$_GET["gambar"]?>" alt=""></li>
<li><?=$_GET["nama"]?></li>
<li><?=$_GET["npm"]?></li>
<li><?=$_GET["jurusan"]?></li>
<li><?=$_GET["email"]?></li>
<li><?=$_GET["phone"]?></li>

</ul>
<a href="GET-POST.php">Kemabali Kehalaman List Mahasiswa</a>
    
</body>
</html>