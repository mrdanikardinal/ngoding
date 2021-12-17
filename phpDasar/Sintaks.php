<?php
/* 
Standard output
1. Echo
2. print
3. print_r // khusus cetak array biasaya untuk debungging
4. var_dump // khusus untuk digunakan untuk isi variable biasaya untuk debugging
*/

// penulisan sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// operator
// aritmatika
// logika
// + - * /  %
// operator penggabung string / concatenation


// Assignment
// =, +=, -=, *=, /=,%=, .=

// perbandingan
// <,>,<=,>=,==, !=

// identitas
// ===, !==

//logika
//&&, ||, !




echo "danikardinal";
echo "<br>";
print "danikardinal";
echo "<br>";
print_r ("danikardinal");
echo "<br>";
var_dump("danikardinal");
echo "<br>";
echo 1234;
echo "<br>";
echo true."ini echo type data true";
echo "<br>";
echo false."ini echo type data false";
echo "<br>";
$nama="Dani Kardinal";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Sintaks PHP</title>
</head>
<body>
<Span>==========Dibawah ini PHP didalam HTML============</Span>
<h1> Hallo Selamat datang <?php echo $nama;?></h1>

<Span>==========Dibawah ini HTML didalam PHP=============</Span> 
<?php
echo"<h1> Hallo Selamat datang $nama</h1>";
?>  
</body>
</html>