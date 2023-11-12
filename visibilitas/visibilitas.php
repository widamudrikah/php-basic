<?php
    class Kendaraan {
        public $merek; // Properti publik
    
        protected $warna; // Properti terlindungi
    
        private $tahun; // Properti pribadi
    
        public function __construct($merek, $warna, $tahun) {
            $this->merek = $merek;
            $this->warna = $warna;
            $this->tahun = $tahun;
        }
    
        public function infoPublik() {
            echo "Merek: " . $this->merek . PHP_EOL;
            echo "Warna: " . $this->warna . PHP_EOL;
            echo "Tahun: " . $this->tahun . PHP_EOL;
        }
    }
    
    $mobilmu = new Kendaraan("Toyota", "Merah", 2023);
    
    echo "Merek: " . $mobilmu->merek . PHP_EOL; // Bisa diakses dari luar kelas (publik)
    // echo "Warna: " . $mobilmu->warna . "<br>"; // Akan menghasilkan error karena properti terlindungi
    // echo "Tahun: " . $mobilmu->tahun . "<br>"; // Akan menghasilkan error karena properti pribadi
    // $mobilmu->infoPublik(); // Memanggil metode publik yang mencetak informasi kendaraan
    
?>