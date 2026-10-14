<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $dosenWali;

    public function __construct(){
        echo "Object Mahasiswa berhasil dibuat";
    }


    public function tampilkanData()
    {
        echo "<h2> Data Mahasiswa <br> </h2>";
        echo "NIM        : " . $this->nim . "<br>";
        echo "Nama       : " . $this->nama . "<br>";
        echo "Prodi      : " . $this->prodi . "<br>";
        echo "Dosen Wali : " . ($this->dosenWali ? $this->dosenWali : "Belum Ada") . "<br><br>";
    }

    
    public function pilihDosenWali($dosen)
    {
        $this->dosenWali = $dosen->nama;
        echo "Mahasiswa <b>" . $this->nama . "</b> berhasil memilih <b>" . $dosen->nama . "</b> sebagai Dosen Wali.<br><br>";
    }
}





class Dosen
{
    public $nidn;
    public $nama;
    public $matakuliah;

    
    public function tampilkanData()
    {
        echo "<h2> Data Dosen <br> </h2>";
        echo "NIDN       : " . $this->nidn . "<br>";
        echo "Nama       : " . $this->nama . "<br>";
        echo "Mata Kuliah: " . $this->matakuliah . "<br><br>";
    }

    
    public function bimbingMahasiswa($mahasiswa)
    {
        echo "Dosen <b>" . $this->nama . "</b> sedang memberikan bimbingan kepada mahasiswa <b>" . $mahasiswa->nama . "</b>.<br><br>";
    }
}


$dosen1 = new Dosen();
$dosen1->nidn = "0412058001";
$dosen1->nama = "bapak fauwaz";
$dosen1->matakuliah = "Pemrograman Web 2";

$dosen2 = new Dosen();
$dosen2->nidn = "0418098502";
$dosen2->nama = "bapak azka";
$dosen2->matakuliah = "Pemrograman Web 2";


$mhs1 = new Mahasiswa();
$mhs1->nim = "24044";
$mhs1->nama = "surep";
$mhs1->prodi = "Sistem Informasi";

$mhs2 = new Mahasiswa();
$mhs2->nim = "24044";
$mhs2->nama = "surap";
$mhs2->prodi = "Sistem Informasi";


$dosen1->tampilkanData();
$dosen2->tampilkanData();

$mhs1->tampilkanData();
$mhs2->tampilkanData();


echo "<h2> Dosen pembimbing dan Mahasiswanya <br> </h2>";
$mhs1->pilihDosenWali($dosen1);
$dosen1->bimbingMahasiswa($mhs1);


$mhs1->tampilkanData();
?>