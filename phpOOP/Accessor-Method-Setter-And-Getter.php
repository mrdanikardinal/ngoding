<?php
// kelas parent
class Produk{
    private $judul;
    private $diskon=0;
    private $punulis;
    private $penerbit;
    private $harga;
   
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;

    }
    public function getJudul(){

        return $this->judul;
    }
    public function setJudul($judul){

        $this->judul =$judul;
    }
    public function getPenulis(){

        return $this->penulis;
    }
    public function setPenulis($penulis){
        $this->penulis= $penulis;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setPenerbit($penerbit){
        $this->penerbit= $penerbit;
    }

    public function getHarga(){

        return $this->harga - ($this->harga * $this->diskon /100);
    }
    public function setHarga($harga){
        $this->harga= $harga;
    }
    public function getDiskon(){
        return $this->diskon;
    }

    public function setDiskon($diskon){
        $this->diskon= $diskon;
    }



    public function getLabel(){
        return"$this->penulis, $this->penerbit";
    }
    public function getInfoProduk(){
        //Komik : Naruto | Mashashi Kishimoto ,Shonen Jump (Rp.30000) - 100 Halaman
        $str="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}";
        return $str;

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
echo "<hr>";
// $produk1->setPenerbit("Dinall Studio");
echo $produk1->getPenerbit();

