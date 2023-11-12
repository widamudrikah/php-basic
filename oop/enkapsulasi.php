<?php
class Mobil {
    private $merk; // Ini adalah variabel privat.
    protected $warna; // Ini adalah variabel protected.

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getInfo() {
        return "Mobil {$this->merk} berwarna {$this->warna}.";
    }
}

class MobilSport extends Mobil {
    public function cetakInfo() {
        return "Ini adalah mobil sport dengan info: " . $this->getInfo();
    }
}

$mobil1 = new Mobil('Toyota', 'Merah');

// Ini akan menghasilkan kesalahan karena $merk adalah variabel privat.
// echo $mobil1->merk;

// Ini akan menghasilkan kesalahan karena $warna adalah variabel protected.
// echo $mobil1->warna;

echo $mobil1->getInfo(); // Output: "Mobil Toyota berwarna Merah."

$mobilSport1 = new MobilSport('Ferrari', 'Kuning');
echo $mobilSport1->cetakInfo(); // Output: "Ini adalah mobil sport dengan info: Mobil Ferrari berwarna Kuning."

?>