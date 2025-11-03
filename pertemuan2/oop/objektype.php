<?php   

class rumah{
    public $warna;
    public $jumlahkamar;
    public $alamat;

    public function __construct($warna, $jumlahkamar, $alamat){
        $this->warna = $warna;
        $this->jumlahkamar = $jumlahkamar;
        $this->alamat = $alamat;
    }

    public function infoRumah(){
        return "Rumah ini berwarna " . $this->warna . ", memiliki " . $this->jumlahkamar . " kamar, dan beralamat di " . $this->alamat . ".";
    }

    function pasanglistrik(rumah $datarumah){
        return "Listrik telah dipasang di rumah yang beralamat di " . $datarumah->alamat . ".";
    }
}


$rumahsaya = new rumah("putih", 4, "Jl. Merpati No. 10");
echo $rumahsaya->infoRumah() . "<br>";  