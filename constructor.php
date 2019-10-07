<?php

    class Produk{

        public $judul = "judul",
                $penerbit = "penerbit",
                $penulis = "penulis",
                $harga = 0;

        public function __construct($judul, $penerbit, $penulis, $harga){
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
        }

        public function getLabel(){
            return "$this->penerbit, $this->judul";
        }

    }

    //Menimpa property public dgn cara Nama_Objek->Property_yang_ditimpa
    $produk1 = new Produk("Naruto", "Erlangga", "Masashi Kishimoto", 1000);
    $produk2 = new Produk("Bleach", "", "", 0);

    //Mencoba menampilkan penerbit dan judul saja dgn menggunakan method getLabel
    echo"Anime : " . $produk1->getLabel();
    echo "<hr>";
    echo"Anime : " . $produk2->getLabel();


?>