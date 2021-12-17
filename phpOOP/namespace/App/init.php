<?php 

// require_once 'App/InfoProduk.php';


spl_autoload_register(function ($class){
    
    $class= explode('\\',$class);
    // App\Produk\User = ["App","Produk","User"];
    $class = end ($class);

    require_once __DIR__ . '/Produk/' . $class . '.php'; 
 
});

spl_autoload_register(function ($class){
    $class= explode('\\',$class);
    // App\Produk\User = ["App","Produk","User"];
    $class = end ($class);

    require_once __DIR__ . '/Service/' . $class . '.php'; 
 
});