<?php
/**
 * variable superglobal
 * 1. $_GET
 * 2. $_POST
 * 3. $_REQUEST
 * 4. $_SESSION
 * 5. $_SERVER
 * 6. $_COOKIE
 * 7. $_ENV
 * 
 * 
 */


$mahasiswa= [
    [
    "nama"=> "Dani Kardinal",
    "npm"=> "123456789",
    "jurusan"=> "Teknik Informatika",
    "email"=> "danikardinal@yahoo.com",
    "phone"=> "0216541216545",
    "gambar"=> "../css3/assets/img/Twitter-Ribbon.png"
    ],
    [
    "nama"=> "Umi Kulsum",
    "npm"=> "123456789",
    "jurusan"=> "Menagement Ekonomi",
    "email"=> "UmiKulsum@yahoo.com",
    "phone"=> "0216541216545",
    "gambar"=> "../css3/assets/img/icon.png"

    ]
];


var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan GET dan POST </title>
    <style>
    .clear {
        clear:both;
    }
    
    </style>
</head>
<body>
<h1>Latihan GET dan POST</h1>

<?php foreach($mahasiswa as $mhs):?>
<ul>
<li> 
<a href="GET-POST-2.php?
nama=<?=$mhs["nama"];?>& 
gambar=<?=$mhs["gambar"];?>&
npm= <?=$mhs["npm"];?>&
email= <?=$mhs["email"];?>&
jurusan= <?=$mhs["jurusan"];?>&
phone= <?=$mhs["phone"];?>
"><?= $mhs["nama"]?></a>
</li>
</ul>
<div class="clear"></div>
<?php endforeach;?>


    
</body>
</html>