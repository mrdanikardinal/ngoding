<?php

class ContohStatic{
    public static $angka =11;

    public static function  halo(){
        return "Hallo". self::$angka++. " Kali";

    }
}

echo ContohStatic::$angka;
echo "<hr>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();