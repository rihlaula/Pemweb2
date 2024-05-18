<?php
include_once('koneksi.php');

$nama = $_POST["nama"];
$gender = $_POST["gender"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$kategori = $_POST["kategori"];
$telpon = $_POST["telpon"];
$alamat = $_POST["alamat"];
$unit_kerja_id = $_POST["unit_kerja_id"];

$query = "INSERT INTO paramedik (id, nama, gender, tempat_lahir, tanggal_lahir, kategori, telpon, alamat, unit_kerja_id) VALUES ('$id','$nama', '$gender','$tempat_lahir', '$tanggal_lahir', '$kategori', '$telpon', '$alamat', '$unit_kerja_id')";




if ($dbh->query($query)) {
    header("Location: paramedik.php");
} else {
    echo "Gagal menyimpan data";
}



