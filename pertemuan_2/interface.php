<?php
// Interface
interface KendaraanInterface {
    public function berjalan();
    public function berhenti();
}

// interface dari KendaraanInterface
class Mobil implements KendaraanInterface {
    public function berjalan() {
        echo "Mobil berjalan di jalan raya<br>";
    }
    public function berhenti() {
        echo "Mobil berhenti di jalan raya<br>";
    }
}

// menggunakan interface
$mobil = new Mobil();
$mobil->berjalan();
$mobil->berhenti();
?>