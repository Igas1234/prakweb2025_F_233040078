<?php
include 'inheritance.php';

class game extends produk{
    public $waktumain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktumain = $waktumain;
    }
}

$game = new game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
echo "Game : " . $game->getLabel() . " - (Rp. " . $game->harga . ") ~ " . $game->waktumain . " Jam. ";
?>
