<?php

    abstract class Produk{

        private $judul = "judul",
                $penerbit = "penerbit",
                $penulis = "penulis",
                $harga = 0,
                $diskon;

        public function __construct($judul, $penerbit, $penulis, $harga){
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
        }

        public function getJudul(){
            return $this->judul;
        }

        public function setJudul($judul){
            $this->judul = $judul;
        }
        
        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }

        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function getLabel(){
            return "$this->penerbit, $this->judul";
        }

        abstract public function getInfoProduk();
        
        public function getInfo(){
            // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.1000) - 100 Halaman.
            // Game : Lost Saga | Wahyu, Gemscool (0) ~ 500 Jam.
            $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga}) ";

            return $str;
        }

    }

    class Komik extends Produk{

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

    class Game extends Produk{

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


    class CetakInfoProduk{

        public $tambahProduk = [];

        public function tambahProduk( Produk $produk ){
            $this->tambahProduk[] = $produk;
        }

        public function cetak(){
            
            $str = "Daftar Produk : <br>";
            
            foreach($this->tambahProduk as $p){
                $str .= "- {$p->getInfoProduk()} <br>";
            }

            return $str;

        }

    }
    

    //Menimpa property public dgn cara Nama_Objek->Property_yang_ditimpa
    $produk1 = new Komik("Naruto", "Shonen Jump", "Masashi Kishimoto", 1000, 100);
    $produk2 = new Game("Lost Saga", "Gemscool", "Wahyu", 70000, 500);

    $cetakInfo = new CetakInfoProduk();

    $cetakInfo->tambahProduk($produk1);
    $cetakInfo->tambahProduk($produk2);
    echo $cetakInfo->cetak();

?>