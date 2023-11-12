<?php

/**
 * Parameter casting adalah teknik yang digunakan untuk
 * mengubah tipe data argumen yang diterima oleh suatu
 * metode agar sesuai dengan yang diharapkan oleh metode tersebut.
 * Ini berguna ketika Anda ingin memastikan bahwa argumen
 * yang diberikan sesuai dengan tipe data yang diharapkan oleh metode.
 */
 class Calculator {
    public function add( $a, $b) : int {
        return $a + $b;
    }
}

$calculator = new Calculator();
echo $calculator->add(5, true); // Parameter "3" akan di-cast menjadi int, hasilnya adalah 8.

 ?>