<?php

    class Produk{

        public $judul = "judul",
                $penerbit = "penerbit",
                $penulis = "penulis",
                $harga = 0;


        //$this digunakan untuk mengambil nilai dari property diatas karena jika tidak
        //property/atribut akan terbuat sendiri di dalam function karena function tidak mencakup daata seluruhnya
        function getLabel(){
            return "$this->penerbit, $this->judul";
        }

    }

    //Menimpa property public dgn cara Nama_Objek->Property_yang_ditimpa
    $produk1 = new Produk();
    $produk1->penerbit = "Hajime Isiyama";
    $produk1->judul = "Attack On Titan";

    $produk2 = new Produk();
    $produk2->penerbit = "Masashi Kisimoto";
    $produk2->judul = "Naruto";

    //Mencoba menampilkan penerbit dan judul saja dgn menggunakan method getLabel
    echo"Anime : " . $produk1->getLabel();
    echo "<hr>";
    echo"Anime : " . $produk2->getLabel();


?>