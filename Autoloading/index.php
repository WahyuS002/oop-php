<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Shonen Jump", "Masashi Kishimoto", 1000, 100);
$produk2 = new Game("Lost Saga", "Gemscool", "Wahyu", 70000, 500);

$cetakInfo = new CetakInfoProduk();

$cetakInfo->tambahProduk($produk1);
$cetakInfo->tambahProduk($produk2);
echo $cetakInfo->cetak();