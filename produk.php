<?php
class produk{
	public $namaBarang = "Laptop",
			$merk = "Asus",
			$harga = 7000000;

}
$produk1 = new produk();
$produk1->namaBarang="Flashdisk";
var_dump($produk1);

echo "<br>";
