<?php

class Voiture2 {
    private $marque;
    private $modele;
    private $annee;
    private $vitesse;

    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->vitesse = 0;
    }

    public function accelerer($vitesse) {
        if ($vitesse >0) {
            $this -> vitesse += $vitesse;
        }
    }

    public function freiner($vitesse) {
        if ($vitesse >0) {
            $this -> vitesse -= $vitesse;
            if ($this -> vitesse < 0) {
                $this -> vitesse = 0;
            }
        }
    }

    public function afficher(){
        echo "Marque : " . $this -> marque . "<br>";
        echo "Modèle : " . $this -> modele . "<br>";
        echo "Année : " . $this -> annee . "<br>";
        echo "Vitesse : " . $this -> vitesse . " km/h<br><br>";
    }

}

$voiture1 = new Voiture2("Mercedes", "AMG", "2026");
$voiture2 = new Voiture2("BMW", "X6", "2026");

$voiture1 -> accelerer(50);
$voiture1 -> freiner(25);

$voiture2 -> accelerer(200);
$voiture2 -> freiner(250);

$voiture1 -> afficher();
$voiture2 -> afficher();