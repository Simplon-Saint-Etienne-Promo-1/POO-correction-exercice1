<?php
class FormuleUn {
    private $speed = 0;

    public function drive() {
        echo "Vroom vroom à " . $this->speed . " km/h";


    }

    public function shiftGear($increment) {
        $this->speed += $increment;

    }
}

$myFormule1 = new FormuleUn();
$myFormule1->drive();
$myFormule1->shiftGear(50);
$myFormule1->drive();