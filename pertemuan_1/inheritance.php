<?php

class komik {
    public function getLabel($penulis, $nama, $tahunTerbit) {
        echo "Komik : yang ditulis oleh $penulis, dengan nama komik $nama, tahun terbit $tahunTerbit";
    }
}

class terjual extends komik {
    public $terjual;

    public function terjual($terjual) {
        echo "Terjual sebanyak", $this->terjual = $terjual;
    }
}

$terjual = new terjual();
$terjual->getLabel("Budi", "Naruto", 2000);
$terjual->terjual(100);



?>