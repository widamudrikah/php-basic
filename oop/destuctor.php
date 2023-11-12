<?php
/**
 * Destructor:
 * Destructor adalah metode yang dipanggil saat objek dihapus
 * atau keluar dari cakupan. Destructor dapat digunakan untuk
 * membersihkan sumber daya atau melakukan tindakan penutupan
 * sebelum objek dihancurkan. Nama destructor adalah __destruct.
 */

 class ContohObjek {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
        echo "Objek {$this->nama} telah dibuat". PHP_EOL;
    }

    public function getInfo() {
        echo "Ini adalah objek dengan nama {$this->nama}" .PHP_EOL;
    }

    public function __destruct() {
        echo "Objek {$this->nama} telah dihancurkan" .PHP_EOL;
    }
}

// Membuat objek pertama
$objek1 = new ContohObjek('A');
$objek1->getInfo();

// Membuat objek kedua
// $objek2 = new ContohObjek('Objek B');
// $objek2->getInfo();

// Objek-objek ini akan dihancurkan secara otomatis ketika keluar dari cakupan.

?>