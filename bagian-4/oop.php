<?php

class Mobil {
    
    // Properti
    public $warna;
    public $merek;

    // Metode
    public function tampilkanInfo() {
        echo "Mobil $this->merek berwarna $this->warna.";
    }
}

$mobil1 = new Mobil(); // membuat objek dari kelas 'Mobil'
$mobil1->merek = "Toyota";
$mobil1->warna = "Merah";
$mobil1->tampilkanInfo(); // menampilkan output

?>