<?php

class Produk {
    
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    
    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

   
    public function tampilkanData() {
        echo "<b>Kode Produk</b> : " . $this->kode . "<br>";
        echo "<b>Nama Produk</b> : " . $this->nama . "<br>";
        echo "<b>Harga</b>       : Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "<b>Stok</b>        : " . $this->stok . " unit<br>";
        echo "<b>Nilai Stok</b>  : Rp" . number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br>";
        echo "<hr>";
    }
}


echo "<h2>System Data Produk - Implementasi PBL</h2>";


$produk1 = new Produk(
    "P001",
    "Laptop",
    7000000,
    10
);

$produk2 = new Produk(
    "P002",
    "HP",
    150000,
    25
);

$produk1->tampilkanData();
$produk2->tampilkanData();

?>