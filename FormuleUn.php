<?php
// On déclare la classe FormuleUn
class FormuleUn {
    // On déclare la propriété $speed en privée
    private $speed = 0;
    
    // Création du constructeur qui va être appelé
    // au moment de l'instanciation de l'objet
    public function __construct($speed) {
        // La variable $this->speed est instanciée avec la valeur passée en paramètre
        $this->speed = $speed;
    }

    // Fonction drive qui affiche la vitesse de la formuleUn
    public function drive() {
        echo "Vroom vroom à " . $this->speed . " km/h";

    }

    // Fonction qui incrément une valeur à speed
    public function shiftGear($increment) {
        $this->speed += $increment;

    }
}

// On instancie une nouvelle FormuleUn
// Qui s'appelle myFormule1 et qui speed égale à 20
$myFormule1 = new FormuleUn(20);
// On appelle la fonction drive
$myFormule1->drive();
// On appelle la fonction shiftGear et on passe 50 en paramètre
$myFormule1->shiftGear(50);
$myFormule1->drive();
