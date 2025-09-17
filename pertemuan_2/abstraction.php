<?php
// Abstract class tidak bisa dibuat objek langsung
abstract class Kendaraan{
    // abstract method wajib diimplementasi di class turunan
    abstract public function jalan();
}

// class turunan mengimplementasi method jalan
class Mobil extends Kendaraan{
    public function jalan() {
        echo "Mobil berjalan di jalan raya";
    }
}

$mobilAbstract = new Mobil(); // buat objek dari class turunan
$mobilAbstract->jalan(); // memanggil method hasil implementasi

?>