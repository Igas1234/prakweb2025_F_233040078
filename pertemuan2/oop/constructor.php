<?php   

class Rumah{
    public $warna;
    public $jumlahkamar;
    public $alamat;

    public function __construct($warnabaru, $jumlahkamarbaru, $alamatbaru){
        $this->warna = $warnabaru;
        $this->jumlahkamar = $jumlahkamarbaru;
        $this->alamat = $alamatbaru;
    }

    public function kuncipintu(){
        return "pintu sudah di kunci";
    }

    public function gantiwarna($warnabaru){
        $this->warna = $warnabaru;
    }

    public function kuncipintukamar(){
        return "pintu di $this->alamat sudah di kunci";
    }
}


