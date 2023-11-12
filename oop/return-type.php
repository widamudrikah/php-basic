<?php
/**
 * Return Type Declaration adalah fitur yang memungkinkan Anda
 * untuk mendefinisikan tipe data yang akan dikembalikan oleh
 * suatu metode. Dengan ini, Anda dapat secara eksplisit
 * menyatakan tipe data yang diharapkan oleh metode,
 * dan PHP akan memberikan kesalahan jika metode tidak
 * mengembalikan nilai yang sesuai dengan tipe yang dideklarasikan.
 */

 class MathFunctions {
    public function divide(float $a, float $b): float {
        if ($b != 0) {
            return $a / $b;
        } else {
            throw new Exception("Tidak dapat membagi dengan nol.");
        }
    }
}
$math = new MathFunctions();
$result = $math->divide(10.5, 2.5);
echo "Hasil pembagian: " . $result . PHP_EOL;
?>