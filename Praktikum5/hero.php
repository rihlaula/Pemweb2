<?php
class Hero{
    //atribut
    public $name = 'Alucard';
    public $hp = 3200;
    public $damage = 240;

    //method
    public function getDetail()

{
    echo "<br> Name: " . $this->name;
    echo "<br> Health Poin: " . $this->hp;
    echo "<br> Damage: " . $this->damage;
    echo "<br> ==============================";
}
}

// instansiasi object hero
$hero1 = new Hero();
$hero1->getDetail();

