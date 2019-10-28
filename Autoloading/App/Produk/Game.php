<?php

class Game extends Produk implements getInfoProduk{

    public $jamMain;

    public function __construct($judul, $penerbit, $penulis, $harga, $jamMain){
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->jamMain = $jamMain;
    }

    public function getInfoProduk(){
        $str = "Game : " . parent::getInfo() . " ~ {$this->jamMain} Jam.";
        return $str;
    }

}