<?php
class Boneka {
    private $warna;

    public function setWarna($warna) {
        $this->warna = $warna; // "this" berarti boneka ini.
    }

    public function getWarna() {
        return $this->warna; // "this" berarti boneka ini.
    }
}

$boneka1 = new Boneka();
$boneka1->setWarna('Merah'); // Mengatur warna boneka1 menjadi merah.

$warnaBoneka1 = $boneka1->getWarna(); // Mendapatkan warna boneka1.
echo $warnaBoneka1;

?>