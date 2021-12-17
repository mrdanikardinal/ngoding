<?php
require_once __DIR__ . '/vendor/autoload.php';
require "functions.php";
$mahasiswa=query("SELECT * FROM mahasiswa ORDER BY id DESC");

$html='<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Tokoh Bangsa Indonesia</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
<h1>Data Tokoh Bangsa Indonesia</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>';
    $i=1;
    foreach($mahasiswa as $row){
        $html.='<tr>
                    <td>'.$i++.'</td>
                    <td><img src="assets/img/'.$row["gambar"].'" width="50" > </td>
                    <td>'.$row["nrp"].'</td>
                    <td>'.$row["nama"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["jurusan"].'</td>
                </tr>';
    }

 $html.='</table>
    
</body>
</html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
// $mpdf->Output('daftar-mahasiswa-cetak.pdf',\Mpdf\Output\Destination::DOWNLOAD);
// $mpdf->Output('daftar-mahasiswa-cetak.pdf','D'); untuk langsung didownload
// $mpdf->Output('daftar-mahasiswa-cetak.pdf','I'); priview

// dapat disingkat
$mpdf->Output('daftar-mahasiswa-cetak.pdf','I');



?>
