<?php
// Operator logika adalah operator untuk membandingkan dua nilai boolean, hasil dari
//operator logika adalah boolean lagi

var_dump(true && true);
var_dump(true and false);
var_dump(true || false);
var_dump(true or true);
var_dump(true xor false);
var_dump(true xor true);
var_dump(!true);
var_dump(!false);


$usia = 25;
$pendapatan = 50000;

if ($usia >= 18 && $pendapatan >= 40000) {
    echo "Kualifikasi untuk pinjaman disetujui.";
} else {
    echo "Kualifikasi untuk pinjaman tidak disetujui.";
}


$jam = 14;

if ($jam < 9 || $jam > 17) {
    echo "Kantor tutup saat ini.";
} else {
    echo "Kantor buka saat ini.";
}

?>