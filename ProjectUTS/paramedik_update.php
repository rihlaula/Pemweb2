<?php
include_once('koneksi.php');

$id = $_POST["id"];
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$kategori = $_POST["kategori"];
$telpon = $_POST["telpon"];
$alamat = $_POST["alamat"];
$unit_kerja_id = $_POST["unit_kerja_id"];

$query = "UPDATE paramedik SET id='$id', nama='$nama', gender='$gender', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kategori='$kategori', telpon='$telpon', alamat='$alamat', unit_kerja_id='$unit_kerja_id' WHERE id=$id";



if ($dbh->query($query)) {
    header("Location: paramedik.php");
} else{
    echo"Gagal menyimpan data";
}
