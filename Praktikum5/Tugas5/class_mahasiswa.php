<?php
class NilaiMahasiswa {
    var $nama;
    var $nim;
    var $matkul;
    var $nilai;

    public function __construct($nama, $nim, $matkul, $nilai){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function data(){
        echo "Nama: " . $this->nama;
        echo "<br> NIM: " . $this->nim;
        echo "<br> Mata Kuliah: " . $this->matkul;
        echo "<br> Nilai: " . $this->nilai;

    }


    public function cekLulus() {
        if ($this-> nilai >= 56) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }

    public function cekNilai(){
        if ($this->nilai >= 0 && $this->nilai <= 35){
            return "E";
        }
        elseif($this->nilai >= 36 && $this->nilai <= 55){
            return "D";
        }
        elseif($this->nilai >= 56 && $this->nilai <= 69){
            return "C";
        }
        elseif($this->nilai >= 70 && $this->nilai <= 84){
            return "B";
        }
        elseif($this->nilai >= 85 && $this->nilai <= 100){
            return "A";
        }
        else {
            return "";
        }
    }
 
}
?>

