<?php
// Tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

//list harga produk
$harga = [
    'tv' => 4200000,
    'kulkas' => 3100000,
    'mesin cuci' =>3000000
];

//Menghitung total produk
$total = $jumlah * $harga[$produk];

// format harga
$total = number_format($total);

// tampilan hasil form
echo "Nama Customer: $customer";
echo "<br>Pilihan Produk: $produk";
echo "<br>Jumlah Beli: $jumlah";
echo "<br>Total Belanja: $total";

