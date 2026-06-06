<?php

class Voiture {
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

    public function accelerer($valeur) {
        if ($valeur > 0) {
            $this->vitesse += $valeur;
        }
    }

    public function freiner($valeur) {
        if ($valeur > 0) {
            $this->vitesse -= $valeur;

            // Empêcher vitesse négative
            if ($this->vitesse < 0) {
                $this->vitesse = 0;
            }
        }
    }

    public function afficher() {
        echo "Marque : " . $this->marque . "<br>";
        echo "Modèle : " . $this->modele . "<br>";
        echo "Année : " . $this->annee . "<br>";
        echo "Vitesse : " . $this->vitesse . " km/h<br><br>";
    }
}

$voiture1 = new Voiture("Toyota", "Corolla", 2020);
$voiture2 = new Voiture("BMW", "X5", 2022);

$voiture1->accelerer(50);
$voiture1->freiner(20);

$voiture2->accelerer(100);
$voiture2->freiner(150);

$voiture1->afficher();
$voiture2->afficher();