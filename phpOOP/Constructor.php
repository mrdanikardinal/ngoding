<?php
class Constructor{
    public $judul="judul";
    public $punulis="penulis";
    public $penerbit="penerbit";
    public $harga=0;

    public function __construct($judul,$penulis,$penerbit,$harga){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }
    public function getLabel(){

        return"$this->penulis, $this->penerbit";
    }
}
$test= new Constructor("Tom and Jerry","dinallStudio","Sandang",70000);

// var_dump($test);
echo $test->judul,$test->penulis,$test->penerbit,$test->harga;
// echo "Komik : " .$test->getLabel();