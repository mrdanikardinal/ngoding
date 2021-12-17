<?php
$mahasiswa= [
        [
        "nama"=> "Dani Kardinal",
        "npm"=> "123456789",
        "jurusan"=> "Teknik Informatika",
        "email"=> "danikardinal@yahoo.com",
        "phone"=> "0216541216545"
        ],
        [
        "nama"=> "Dani Kardinal",
        "npm"=> "123456789",
        "jurusan"=> "Teknik Informatika",
        "email"=> "danikardinal@yahoo.com",
        "phone"=> "0216541216545"

        ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Array</title>
    <style>
    .kotak{
        width:200px;
        height:100px;
        background-color:green;
        text-align:center;
        float:left;
        line-height:100px;
        margin:3px;
        radius:50%; 
        transition: 1s;
        
    }
    .kotak:hover {

        transform: rotate(360deg);
        border-radius: 50%;
    }
    .clear{
            clear:both;
        }
    
    </style>
</head>
<body>
<h1>Latihan Array Associative</h1>

<?php foreach($mahasiswa as $mhs):?>
        <ul>
        <li class="kotak"><?=$mhs["nama"]?></li>
        <li class="kotak"><?=$mhs["npm"]?></li>
        <li class="kotak"><?=$mhs["email"]?></li>
        <li class="kotak"><?=$mhs["jurusan"]?></li>
        <li class="kotak"><?=$mhs["phone"]?></li>
        <div class="clear"></div>
        </ul>
<?php endforeach;?>


</body>
</html>