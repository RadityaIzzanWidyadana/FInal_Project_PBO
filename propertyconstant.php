<?php

namespace Pbo\Marketplace;

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