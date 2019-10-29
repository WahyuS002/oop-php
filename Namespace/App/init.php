<?php

spl_autoload_register(function ($class){
    // App\Produk\User.php
    // jika yg diatas di explode maka bentuknya adalah
    // x = ["App" , "Produk", "User"]

    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Produk/' . $class . '.php';

});

spl_autoload_register(function ($class){

    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Services/' . $class . '.php';

});