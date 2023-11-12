<?php

class Hewan {
    protected $nama;
    protected $jenis;
  
    public function __construct($nama, $jenis) {
      $this->nama = $nama;
      $this->jenis = $jenis;
    }
  
    public function suara() {
      echo "Hewan ini bersuara...\n";
    }
  }
  
  
  class Kucing extends Hewan {
    public function suara() {
      echo "{$this->nama} ({$this->jenis}) mengeluarkan suara: Meow!\n";
    }
  }
  
  class Anjing extends Hewan {
    public function suara() {
      echo "{$this->nama} ({$this->jenis}) mengeluarkan suara: Woof!\n";
    }
  }
  
  // Membuat objek dari kelas Kucing
  $kucing = new Kucing("Kitty", "Kucing");
  
  // Memanggil metode suara dari kelas Kucing
  $kucing->suara();
  
  // Membuat objek dari kelas Anjing
  $anjing = new Anjing("Buddy", "Anjing");
  
  // Memanggil metode suara dari kelas Anjing
  $anjing->suara();
