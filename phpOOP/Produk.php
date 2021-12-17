<?php
// jualan produk
// komik
// game
class Produk {
// belajar kelas
public $judul="judul";
public $punulis="penulis";
public $penerbit="penerbit";
public $harga=0;

public function getLabel(){
    return "$this->penulis,$this->penerbit";
}

}
// $produk1= new Produk();
// $produk1->judul="Doraemon";
// var_dump($produk1);
$produk3= new Produk();
$produk3->judul="Doraemon";
$produk3->penulis="BelumDikehui";
$produk3->penerbit="DinalStudio";
$produk3->harga=300000;
echo $produk3->getLabel();
var_dump($produk3);