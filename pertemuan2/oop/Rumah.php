<?php
class rumah{
    public $warna = "putih";
    public $jumlahkamar = 4;

    public function kuncipintu()
    {
        return "pintu sudah di kunci";
    }

    public function gantiwarna($warnabaru, $jumlahkamarbaru)
    {
        $this->warna = $warnabaru;
        $this->jumlahkamar = $jumlahkamarbaru;
    }
}


$rumahsaya = new rumah("putih",4, "Jl. Merpati No. 10");
echo "warna awal rumah saya adalah : " . $rumahsaya->warna . "<br>";
echo "jumlah kamar awal rumah saya adalah : " . $rumahsaya->jumlahkamar . "<br>";

$rumahsaya->gantiwarna("biru", 5);

echo "warna baru rumah saya adalah : " . $rumahsaya->warna . "<br>";
echo "jumlah kamar rumah saya sekarang : " . $rumahsaya->jumlahkamar . "<br>";
echo $rumahsaya->kuncipintu();
