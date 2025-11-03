<?php
include 'inheritance.php';

class komik extends produk{
    public $jmlhalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlhalaman = $jmlhalaman;
    }
}

$komik = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
echo "Komik : " . $komik->getLabel() . " - (Rp. " . $komik->harga . ") ~ " . $komik->jmlhalaman . " Halaman. ";
?>
