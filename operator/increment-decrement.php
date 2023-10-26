<?php
/*
increment = penambahan
dicrement = pengurangan
*/

$a = 5;
$b = $a++; // Kembalikan $a (5), lalu naikkan 1 angka
echo "a: $a, b: $b\n"; // Output: a: 6, b: 5

$c = 5;
$d = ++$c; // Naikkan $a satu angka (6), lalu kembalikan $a (6)
echo "c: $c, d: $d\n"; // Output: a: 6, b: 6

$e = 8;
$f = $e--; // Kembalikan $a (8), lalu turunkan 1 angka
echo "e: $e, f: $f\n"; // Output: a: 7, b: 8

$g = 8;
$h = --$g; // Turunkan $a satu angka (7), lalu kembalikan $a (7)
echo "g: $g, h: $h"; // Output: a: 7, b: 7


?>