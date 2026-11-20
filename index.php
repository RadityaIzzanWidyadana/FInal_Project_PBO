<?php
require('./propertyconstant.php');

use Pbo\Marketplace\produk;

//object
$produk = new produk();

$produk ->setKode('P001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(10);


echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga: ". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak(). "%";
echo "<br/>";

echo "Total Harga: Rp". $produk->total();
