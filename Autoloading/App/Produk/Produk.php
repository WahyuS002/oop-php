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
    
    public function getInfo(){
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.1000) - 100 Halaman.
        // Game : Lost Saga | Wahyu, Gemscool (0) ~ 500 Jam.
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga}) ";

        return $str;
    }

}