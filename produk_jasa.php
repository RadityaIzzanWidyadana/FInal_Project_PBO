<?php
require('./jasa.php');

use Pbo\Marketplace\Jasa;

//object
$produk = new Jasa();

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
echo "<br/>";
echo "metode pembayaran " . $produk->payment('qris');