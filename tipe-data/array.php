<?php
// Array Numerik
$angka = array(1, 2, 3, 4);
$angka[3] = "rambutan";
$angka[] = "bayam";
unset($angka[0]);
// var_dump($angka);
// var_dump($angka[2]);

// Array Assosiatif (key, value)

$kelas = array(
    "nama_kelas"    => "X RPL",
    "jumlah_siswi"  => 18,
    "wali_kelas"    => "Miss Agisti",
    "alamat"        => array(
        "kota"      => "Bogor",
        "Negara"    => "Indonesia",
        "spesifik"  => array(
            "jalan" => "JL. Dayeuh",
            "RT/RW" => "12/08"
        )
    )
);

var_dump($kelas["alamat"]["spesifik"]["jalan"]);
?>