<?php 

class Komik extends Produk implements getInfoProduk{

    public $halaman;

    public function __construct($judul, $penerbit, $penulis, $harga, $halaman){
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->halaman = $halaman;
    }

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfo() . " -  {$this->halaman} Halaman.";
        return $str;
    }
}