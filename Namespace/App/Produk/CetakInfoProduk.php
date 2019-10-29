<?php

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