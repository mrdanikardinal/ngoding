<?php

interface InfoProduk{
    public function getInfoProduk();
}
// kelas parent
 abstract class Produk{
    protected $judul;
    protected $diskon=0;
    protected $punulis;
    protected $penerbit;
    protected $harga;
   
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

    
    abstract public function getInfo();
    

 


}

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

// kelas cetak 
class CetakInfoProduk{
    public $daftarProduk =[];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[]= $produk;
    }

    public function cetak(){
        $str="Daftar Produk :<br>"; 
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
    


}

$produk1=new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);
$produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",350000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();