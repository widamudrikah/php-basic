<?php


/**
 * Constructor adalah seperti "pembuat" objek.
 * Ketika Anda membuat objek dari suatu kelas,
 * constructor adalah metode khusus yang digunakan
 * untuk mengatur properti atau nilai awal objek tersebut.
 * Ini adalah langkah pertama saat objek "dibuat"
 * dan biasanya memiliki nama __construct dalam PHP.
 * Contoh Constructor:
 * Jika Anda memiliki kelas Mobil, constructor digunakan
 * untuk mengatur warna dan merk mobil saat Anda membuat mobil baru.
 */
class Mobil {

    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function cetak() {
        echo "Merek " .$this->merk;
    }
}

$mobilBaru = new Mobil("Toyota", "Merah");
$mobilBaru->cetak();
?>

