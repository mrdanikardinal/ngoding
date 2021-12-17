<?php
$hari=[
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jum'at",
    "Sabtu",
    "Minggu"
];
$bulan=[

    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
];
var_dump($hari);
echo "<br>";
// echo $hari[2];
for($i=0; $i<count($hari); $i++){
    echo "<br>";
    echo $hari[$i];
}
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
<div class="clear"></div>

<?php for ($a=0;$a<count($hari);$a++):?>
<div class="kotak"><?=$hari[$a]?></div>
<?php endfor;?>
<div class="clear"></div>
<?php foreach ($bulan as $bul) :?>
<div class="kotak"><?=$bul?></div>
<?php endforeach;?>

</body>
</html>