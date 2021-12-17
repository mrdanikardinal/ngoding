<?php

// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){
// cek usernam & password

if($_POST["nama"]=="dani"&&$_POST["password"]=="123"){
    header("Location: admin.php");
// jika bernar, riderict kehalam admin

    exit;
}else{
// jika salah , tampilkan pesan kesalahan
    $error= true;
}

}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Form POST</title>
</head>
<body>
<!-- <?php if(isset($_POST["submit"])):?>
<h1> Hallo , Selamat Datang <?=$_POST["nama"]?></h1>
<?php endif;?>
<form action="" method="post">
<label for="Fnama">Masukan Nama</label>
<input type="text" name="nama" id="Fnama">
<br>S
<button type="submit" name="submit">KIRIM</button>
</form> -->
<?php if(isset($error)) :?>
<p style="color:red"; font-style:italic;>username/password salah!</p>
<?php endif;?>

<ul>
<form action="admin.php" method="post">
<li>
<label for="username">Usernama:</label>
<input type="text" name="nama" id="username">
</li>
<li>
<label for="password">Password:</label>
<input type="password" name="password" id="password">
</li>
<li>
<button type="submit" name="submit">Login</button>
</li>





</form>
</ul>
    
</body>
</html>