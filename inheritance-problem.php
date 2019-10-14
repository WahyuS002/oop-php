<?php

    class Produk{

        public $judul = "judul",
                $penerbit = "penerbit",
                $penulis = "penulis",
                $harga = 0,
                $halaman,
                $jamMain,
                $tipe;

        public function __construct($judul, $penerbit, $penulis, $harga, $halaman, $jamMain, $tipe){
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
            $this->halaman = $halaman;
            $this->jamMain = $jamMain;
            $this->tipe = $tipe;
        }

        public function getLabel(){
            return "$this->penerbit, $this->judul";
        }

        public function getInfoLengkap(){
            // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.1000) - 100 Halaman.
            // Game : Lost Saga | Wahyu, Gemscool (0) ~ 500 Jam.
            $str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga}) ";

            if($this->tipe == "Komik"){
                $str .= "- {$this->halaman} Halaman.";
            }else if($this->tipe == "Game"){
                $str .= "{$this->jamMain} Jam.";
            }

            return $str;
        }

    }

    class CetakInfoProduk{
        
        //Produk menjadi acuan bahwa yang bisa diambil adalah parameter dari produk itu sendiri
        public function cetak(Produk $produk){
            
            $str = ("{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})");
            return $str;

        }

    }

    //Menimpa property public dgn cara Nama_Objek->Property_yang_ditimpa
    $produk1 = new Produk("Naruto", "Shonen Jump", "Masashi Kishimoto", 1000, 100, 0, "Komik");
    $produk2 = new Produk("Lost Saga", "Gemscool", "Wahyu", 0, 0 ,500, "Game");

    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.1000) - 100 halaman.
    // Game : Lost Saga | Wahyu, Gemscool (0) ~ 500 jam.
    echo $produk1->getInfoLengkap();
    echo "<hr>";
    echo $produk2->getInfoLengkap();

?>