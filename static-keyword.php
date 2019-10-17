<?php

    class Coba{
    
        public static $angka = 1;
        
        public static function hello(){
            return "Hello Notip " . self::$angka++;
        }
    
    }

    echo Coba::$angka;
    echo "<hr>";
    echo Coba::hello();
    echo "<hr>";
    echo Coba::hello();
    

?>