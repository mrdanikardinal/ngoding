<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Test Admin</title>
</head>
<body>
<?php if(!isset($_POST["submit"])) :?>
<h2>Login Dulu Bos!!</h2>
<?php else:?>
<h1>Selamat datang <?=$_POST["nama"];?></h1>
<?php endif;?>

<a href="KHUSUS-POST.php">Logout!</a>
    
</body>
</html>