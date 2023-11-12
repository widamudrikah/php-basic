<?php

// Abstract class
abstract class Bentuk {
    abstract public function hitungLuas();
}

// Class turunan pertama
class Persegi extends Bentuk {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

// Class turunan kedua
class Lingkaran extends Bentuk {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return 3.14 * $this->jariJari * $this->jariJari;
    }
}

// Membuat objek dari class Persegi
$persegi = new Persegi(5);
echo "Luas Persegi: " . $persegi->hitungLuas() . " satuan luas\n";

// Membuat objek dari class Lingkaran
$lingkaran = new Lingkaran(4);
echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . " satuan luas\n";

?>