<?php
require_once('class_lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

// instansiasi object Lingkaran
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(8);

// Panggil Method
echo "<br> Luas Lingkar 1: " . $lingkar1->getLuas();
echo "<br> Luas Lingkar 2: " . $lingkar2->getLuas();

echo "<br> Keliling Lingkar 1: " . $lingkar1->getKeliling();
echo "<br> Keliling Lingkar 2: " . $lingkar2->getKeliling();

