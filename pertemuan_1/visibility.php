<?php

class mahasiswa {
    public $nama;
    protected $prodi;
    private $nim;

    public function __construct() {
        $this->nim = "1234";
        echo $this->nim;
    }
}

class mahasiswaTeknik extends mahasiswa {
    public function __construct() {
        $this->prodi = "Teknik Informatika";
        echo $this->prodi;
    }
}

$mahasiswa_teknik = new mahasiswaTeknik();
echo "<br>";
$mahasiswa = new mahasiswa();
echo "<br>";
echo $mahasiswa->nama = "Budi";
echo $mahasiswa->prodi = "Teknik Komputer";
echo $mahasiswa->nim = "5678";


?>