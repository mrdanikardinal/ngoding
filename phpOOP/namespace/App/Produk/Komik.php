<?php

// kelas komik
class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga,$jmlHalaman=0){
        parent::__construct($judul,$penulis,$penerbit,$harga,$jmlHalaman);
        $this->jmlHalaman=$jmlHalaman;
    }
    public function getInfoProduk(){
        $str=" Komik:".$this->getInfo()."-{$this->jmlHalaman} Halaman.";
        return $str;

    }

    public function getInfo(){
        //Komik : Naruto | Mashashi Kishimoto ,Shonen Jump (Rp.30000) - 100 Halaman
        $str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}";
        return $str;

    }

    

}