<?php

/**
 * Late Static Binding (LSB) adalah konsep dalam OOP
 *  yang memungkinkan kelas anak (subclass) untuk menggunakan
 *  metode atau properti statis dari kelas orangtua (superclass)
 *  dengan identitas kelas anak, bukan kelas orangtua.
 * Ini memungkinkan kelas anak untuk mengakses properti
 * dan metode yang diwarisi dari kelas orangtua dengan lebih fleksibel.
 */
class ParentClass {
    public static $value = "Parent Value";
    
    public static function getValue() {
        return static::$value;
    }
}

class ChildClass extends ParentClass {
    public static $value = "Child Value";
}

echo ParentClass::getValue();  // Output: "Parent Value"
echo PHP_EOL;
echo ChildClass::getValue();   // Output: "Child Value"

?>