<?php


class produk {

public string $kode;
public string $nama;
public int $harga;
public int $stok;

public const PAJAK = 0.11;
}


//object

$produk = new produk();

$produk->kode = 'A001';

$produk->nama = 'Laptop';

$produk->harga = 1000000;

$produk->stok = 5;


//hitung pajak

$pajak = produk::PAJAK * 100; // 1,1jt

$jumlahpajak = $produk->harga * produk::PAJAK;


//total

$total = $produk->harga + $jumlahpajak;


echo "Produk: ". $produk->nama;

echo "<br/>";

echo "Harga: ". $produk->harga;

echo "<br/>";

echo "Stok: ". $produk->stok;

echo "<br/>";

echo "Pajak: ". $pajak. "%";

echo "<br/>";

echo "Total Harga: Rp". $total;