<?php
class Lingkaran{
    /**
     * Acces modifier:
     * 1. Public: properti/ method dapat di akses dimanapun
     * 2. Private: roperti/ method hanya dapat di akses di dalam class tsb.
     * 3. protected: Mirip sebuah privat, tetapi dapat di askes juga
     * oleh child class
     */
     
     //properti
    private $jari;
    const PHI = 3.14;

    // method: function yang berada di dalam class
    // construct: metod yg otomatis berjalan ketika class di buat
    public function __construct($r)
    {
        $this->jari = $r;
    }

    public function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(){
        return 2 * self::PHI * $this->jari * $this->jari;
    }

}

class Persegi{

}

?>
