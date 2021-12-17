<?php

 define('NAMA','Dani Kardinal');

 const UMUR = 33;

 echo NAMA. "<br>";
 echo UMUR;
 

 function coba(){
     return __FUNCTION__;
 }
 echo coba();


 class Coba {

    public $kelas = __CLASS__;
 }

 $obj= new Coba;

 echo $obj->kelas;
 