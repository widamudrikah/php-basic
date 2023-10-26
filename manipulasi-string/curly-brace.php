<?php

$siswa = [
    'nama' => 'Alice',
    'usia' => 25,
    'kota' => 'Jakarta'
];

$pesan = "Nama: {$siswa['nama']}, Usia: {$siswa['usia']} tahun, Tinggal di {$siswa['kota']}.";
echo $pesan;

?>