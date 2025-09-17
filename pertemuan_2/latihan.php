<?php

// 1. Interace
interface KebunBinatang {
    public function bersuara();
}

// 2. class Gajah mengimplementasi interface
class Gajah implements KebunBinatang {
    const JENIS = "Gajah"; // class content
    private $nama;
    private $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Getter nama
    public function getNama() {
        return $this->nama;
    }

    // Getter umur
    public function getUmur() {
        return $this->umur;
    }

    public function bersuara() {
        echo "Trumpetttt";
    }
}

// class Jerapah
class Jerapah implements KebunBinatang {
    const JENIS = "Jerapah"; // class content
    private $nama;
    private $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Getter nama
    public function getNama() {
        return $this->nama;
    }

    // Getter umur 
    public function getUmur() {
        return $this->umur;
    }

    public function bersuara() {
        echo "Pipipip";
    }
}

// static method
class KebunBinatangHelper {
    public static function cetakInfo($kebunBinatang) {
        echo "Jenis:" . $kebunBinatang::JENIS . "<br>";
        echo "Nama:" . $kebunBinatang->getNama() . "<br>";
        echo "Umur:" . $kebunBinatang->getUmur() . "<br>";
        $kebunBinatang->bersuara();
        echo "<br>";
    }
}

// final class tidak bisa diwarisi lagi
final class KebunBinatangFinal {
    private $koleksi = []; // daftar hewan
    private static $jumlahHewan = 0; // static property untuk menghitung jumlah hewan

    public function tambahHewan($kebunBinatang) {
        $this->koleksi[] = $kebunBinatang;
        self::$jumlahHewan++;
        echo "Menambahkan hewan ke kebun binatang<br>";
        KebunBinatangHelper::cetakInfo($kebunBinatang);
    }

    public function tampilkanSemuaHewan() {
        echo "<br>--- Daftar Hewan di Kebun Binatang ---<br>";
        foreach($this->koleksi as $hewan) {
            KebunBinatangHelper::cetakInfo($hewan);
        }
        echo "Total Hewan:" . self::$jumlahHewan . "<br>";
    }
}

// eksekusi latihan
$kebunBinatang = new KebunBinatangFinal();
$kebunBinatang->tambahHewan(new Gajah("Gajah", 10));
$kebunBinatang->tambahHewan(new Jerapah("Jerapah", 5));
// tampilkan hewan
$kebunBinatang->tampilkanSemuaHewan();















