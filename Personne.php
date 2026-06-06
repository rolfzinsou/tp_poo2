<?php

// class Personne {
//     private $nom;
//     private $prenom;
//     private $age;

//     public function setNom($n){
//         $this->nom = $n;
//     }
//     public function setPrenom($p){
//         $this->prenom = $p;
//     }
//     public function setAge($a){
//         $this->age = $a;
//     }

//     public function getNom(){
//         return $this->nom;
//     }
//     public function getPrenom(){
//         return $this->prenom;
//     }
//     public function getAge(){
//         return $this->age;
//     }
//     public function coordonnees() {
//         return $this->prenom . " " . $this->nom . " a " . $this->age . " ans.";
//     }
// }

// $p = new Personne();   // instanciation de la classe Personne
// // $p->nom = "Zinsou";
// // $p->prenom = "Rolf";
// // $p->age = 30;

// $p->setNom('Zinsou');
// $p->setPrenom('Rolf');
// $p->setAge(18);

// // Appel d'une méthode
// echo $p -> coordonnees();

class Personne {
    private $nom;
    private $prenom;
    private $age;

    public function __construct($n, $p, $a) {
        $this -> nom = $n;
        $this -> prenom = $p;
        $this -> age = $a;
    }

    public function afficher() {
        echo " Nom : $this->nom, Prénom : $this->prenom, Âge : $this->age";
    }
}

$p1 = new Personne("Zinsou", "Rolf", 18);
$p1 -> afficher();