<?php

class contoh { 
    public $nama = "Budi";

    public function __construct($nama, $umur)
    {
        echo "Halo nama saya $nama, saya $umur tahun";
    }

    // public function Perkenalan($nama) {
    //     echo "Halo nama saya $nama";
    // }
}

// $mahasiswa = new contoh();
// echo $mahasiswa->nama = "Budi lagi";

// echo "<br>";
// $mahasiswa1 = new contoh();
// echo $mahasiswa1->Perkenalan("Jono");
$mahasiswa2 = new contoh("Budiono", 20);
?>