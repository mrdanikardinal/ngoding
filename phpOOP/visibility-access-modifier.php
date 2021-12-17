<?php
// kelas parent
class Produk{
    public $judul;
    protected $diskon=0;
    private $punulis;
    public $penerbit;
    private $harga;
   
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
        $str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}";
        return $str;

    }
    public function getHarga(){

        return $this->harga - ($this->harga * $this->diskon /100);
    }



}

// kelas komik
class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga,$jmlHalaman=0){
        parent::__construct($judul,$penulis,$penerbit,$harga,$jmlHalaman);
        $this->jmlHalaman=$jmlHalaman;
    }
    public function getInfoProduk(){
        $str=" Komik:".parent::getInfoProduk()."-{$this->jmlHalaman} Halaman.";
        return $str;

    }

    
    public function setDiskon($diskon){
        $this->diskon= $diskon;
    }

}

// kelas game
class Game extends Produk {
    public $waktuMain;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga,$waktuMain=0){
        parent::__construct($judul,$penulis,$penerbit,$harga,$waktuMain);
        $this->waktuMain=$waktuMain;

    }

    public function getInfoProduk(){
        $str=" Game: ".parent::getInfoProduk()."-{$this->waktuMain} Jam.";
        return $str;

    }
    
}

// kelas cetak 
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str="{$produk->judul} | {$produk->getLabel()}, (Rp.{$produk->harga})"; 
        return $str;
    }
    


}

$produk1=new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);
$produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",350000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();
echo "<br>";

