<?php

class Mobil {
    public $warna;
    public $merek;

    public function tampilkanInfo() {
        echo "Mobil $this->merek berwarna $this->warna.";
    }
}

class Sedan extends Mobil {
    public $jenis;

    public function tampilkanJenis() {
        echo "Ini adalah mobil sedan jenis $this->jenis.";
    }
}

?>