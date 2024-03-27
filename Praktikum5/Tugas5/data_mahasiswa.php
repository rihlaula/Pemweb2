<?php
require_once ('class_mahasiswa.php');

//Tangkap imput form
$nama =$_POST['nama'] ?? "";
$nim =$_POST['nim'] ?? "";
$matkul =$_POST['matkul'] ?? "";
$nilai =$_POST['nilai'] ?? "";

if ($nama && $nim && $matkul && $nilai){
    $nilaiMahasiswa = new NilaiMahasiswa($nama, $nim, $matkul, $nilai);

    $nilaiMahasiswa->data();

    echo "<br> Grade: " . $nilaiMahasiswa->cekNilai();
    echo "<br> Status: " . $nilaiMahasiswa->cekLulus();

}




?>