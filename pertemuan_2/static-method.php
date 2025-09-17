<?php

class Matematika {
    public static $angka = 10; // static property

    public static function kali() { // static method
        return self::$angka * 10;
    }
}

echo Matematika::kali();


?>