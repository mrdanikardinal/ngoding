<?php
require_once 'App/init.php';
// $produk1=new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);
// $produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",350000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();


// namespace kita dapat memberikan alias

use App\Produk\User as produkUser;
use App\Service\User as serviceUser;
// new User();
// new App\Produk\User();
new produkUser();
echo "<br>";
new serviceUser();
// new App\Service\User();