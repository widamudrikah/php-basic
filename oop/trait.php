<?php

/**Trait adalah fitur dalam pemrograman berorientasi objek (OOP) PHP
 * yang memungkinkan Anda untuk menambahkan metode dan properti
 * ke dalam kelas tanpa perlu mewarisi kelas tersebut.
 * Ini memberikan fleksibilitas yang lebih besar dalam mengorganisasi
 * kode Anda dan memungkinkan komposisi ulang yang mudah untuk
 * fungsionalitas yang sama di beberapa kelas.
 
 *  Ini memungkinkan kita untuk berbagi fungsionalitas yang sama
 * di antara kelas-kelas yang berbeda tanpa harus mewarisi satu kelas dasar. */

 
trait Log {
    public function logMessage($message) {
        echo "Log: " . $message . "\n";
    }
}

class User {
    use Log; // Menggunakan trait Log

    public function doSomething() {
        $this->logMessage("User is doing something.");
    }
}

class Order {
    use Log; // Menggunakan trait Log

    public function processOrder() {
        $this->logMessage("Order is being processed.");
    }
}

$user = new User();
$user->doSomething();

$order = new Order();
$order->processOrder();

?>