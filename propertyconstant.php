<?php

class produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public function __construct($kode, $nama, $harga, $stok){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public const PAJAK = 0.11;

    public function pajak(){
        return self::PAJAK * 100;
    }

    public function total(){
        return $this->harga +($this->harga*self::PAJAK);
    }

}


//object
$produk = new produk('A001', 'Laptop', 1000000, 5);
// $produk->kode = 'A001';
// $produk->nama = 'Laptop';
// $produk->harga = 1000000;
// $produk->stok = 5;

echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $produk->pajak(). "%";
echo "<br/>";

echo "Total Harga: Rp". $produk->total();