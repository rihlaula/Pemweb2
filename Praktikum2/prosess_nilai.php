<?php
// tangkap input form
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];
$grade;
$predikat;


//hitung nilai total (30% UTS, 35% UAS dan TUGAS 35% melebihi 55)
$nilai_total = (30 / 100 * $uts) + (35 / 100 * $uas) + (35 / 100 * $tugas);
if ($nilai_total > 55) {
    $status = 'Lulus';
} else {
    $status = 'Tidak Lulus';
}

//grade

if ($nilai_total <= 35) {
    $grade = 'E';
    $predikat = 'Sangat Kurang';
} elseif ($nilai_total <= 55) {
    $grade = 'D';
    $predikat = 'Kurang';
} elseif ($nilai_total <= 69) {
    $grade = 'C';
    $predikat = 'Cukup';
} elseif ($nilai_total <= 84) {
    $grade = 'B';
    $predikat = 'Memuaskan';
} elseif ($nilai_total <= 100) {
    $grade = 'A';
    $predikat = 'Sangat Memuaskan';
} else {
    $grade = 'I';
    $predikat = 'Tidak Ada';
}


//hasil form
echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah : $matkul";
echo "<br> Nilai UTS : $uts";
echo "<br> Nilai UAS : $uas";
echo "<br> Nilai Tugas : $tugas";
echo "<br> Nilai Total : $nilai_total";
echo "<br> Status : $status";
echo "<br> Grade : $grade";
echo "<br> Predikat : $predikat";
