<?php
// kelas game
class Game extends Produk implements InfoProduk {
    public $waktuMain;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga,$waktuMain=0){
        parent::__construct($judul,$penulis,$penerbit,$harga,$waktuMain);
        $this->waktuMain=$waktuMain;

    }

    public function getInfoProduk(){
        $str=" Game: ".$this->getInfo()."-{$this->waktuMain} Jam.";
        return $str;

    }

    public function getInfo(){
        //Komik : Naruto | Mashashi Kishimoto ,Shonen Jump (Rp.30000) - 100 Halaman
        $str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}";
        return $str;

    }
    
}