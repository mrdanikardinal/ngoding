<?php
class Produk{
    public $judul;
    public $punulis;
    public $penerbit;
    public $harga;
    public $jmlHalaman;
    public $waktuMain;
   

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;

    }
    public function getLabel(){
        return"$this->penulis, $this->penerbit";
    }
    public function getInfoProduk(){
        //Komik : Naruto | Mashashi Kishimoto ,Shonen Jump (Rp.30000) - 100 Halaman


    }


}


class Komik extends Produk {
    public function getInfoProduk(){
        $str=" Komik: {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})-{$this->jmlHalaman} Halaman.";
        return $str;

    }

}

class Game extends Produk {

    public function getInfoProduk(){
        $str=" Game: {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})-{$this->waktuMain} Jam.";
        return $str;

    }
    
}


class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str="{$produk->judul} | {$produk->getLabel()}, (Rp.{$produk->harga})"; 
        return $str;
    }
    


}

$produk1=new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",350000);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
