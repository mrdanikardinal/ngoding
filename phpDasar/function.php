<?php


// Date 
// untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");
echo"<br>";
//time fungsi untuk mendeteksi waktu saat ini
//Unix Timestamp / EPOCH time
echo time();
echo "<br>";

// mktime()
// membuat sendiri detik yang sudah berlalu
// jam,menit,detik,bulan,tanggal,tahun
// mktime(0,0,0,3,17,1993);
print date ("l,M-Y", mktime(0,0,0,3,17,1993));
echo "<br>";

//strtotime
print date ("l,M-Y" , mktime(0,0,0,11,21,1994));

function cetak($waktu="datang",$nama="admin"){
    return "Selamat $waktu, $nama";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?=cetak("malam","danikardinal");?></h1>
</body>
</html>
