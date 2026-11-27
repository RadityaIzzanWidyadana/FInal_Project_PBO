<?php
namespace Pbo\Marketplace;

require_once('./propertyconstant.php');

use Pbo\Marketplace\produk;

class Jasa {
    
use produk;

    public function payment($tipe){

        return match($tipe){
            "virtual"=> "Virtual Account",
            "qris"=> "QRIS",
            default => "hanya bisa va dan qris"
        };
    }
}