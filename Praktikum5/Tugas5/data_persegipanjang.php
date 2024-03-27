<?php
require_once ('class_persegipanjang.php');

// Contoh penggunaan class PersegiPanjang
$persegiPanjang = new PersegiPanjang(2, 8);

//panggil Method
echo "<br> Luas Persegi Panjang: " . $persegiPanjang->hitungLuas();
echo "<br> Keliling Persegi Panjang: " . $persegiPanjang->hitungKeliling();


?>



