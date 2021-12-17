<?php
$mahasiswa =[
    [
    "Danikardinal",
    "123456789",
    "Teknik Informatika",
    "danikardinal@yahoo.com"
    ],
    [
        "Didi Rohmat Salimi",
        "987654321",
        "Teknik Robotik",
        "didirohmat@yahoo.com"
    ],
      
    [
        "Danikardinal",
        "123456789",
        "Teknik Informatika",
        "danikardinal@yahoo.com"
        ],
        [
            "Didi Rohmat Salimi",
            "987654321",
            "Teknik Robotik",
            "didirohmat@yahoo.com"
        ],
    [
        "Danikardinal",
        "123456789",
        "Teknik Informatika",
        "danikardinal@yahoo.com"
        ],
        [
            "Didi Rohmat Salimi",
            "987654321",
            "Teknik Robotik",
            "didirohmat@yahoo.com"
        ]
    
    

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Array 2</title>
    <style>
    .kotak{
        width:100px;
        height:100px;
        background-color:green;
        text-align:center;
        float:left;
        line-height:100px;
        margin:3px;
    }
    .clear{
            clear:both;
        }
    
    </style>
</head>
<body>
<h1>Latihan Array 2 Dimensi</h1>
<ul>
<?php foreach ($mahasiswa as $mhs):?>
<li>Nama: <?=$mhs[0]?></li>
<li> NPM: <?=$mhs[1]?></li>
<li>Program Studi: <?=$mhs[2]?></li>
<li>E-Mail: <?=$mhs[3]?></li>
<?php endforeach;?>

</ul>


</body>
</html>