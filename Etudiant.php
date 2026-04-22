<?php

class Etudiant {
    public $nom;
    public $prenom;
    public $formation;

    public function __construct ($n, $p, $f) {
        $this -> nom = $n;
        $this -> prenom = $p;
        $this -> formation = $f;
    }

    public function afficher() {
        return $this -> prenom . ' ' .$this -> nom . ' suit la formation ' . $this -> formation . '<br>'; 
    }

    public function __destruct() {
        echo 'Fin de traitement ...';
    }
}

$e1 = new Etudiant('Zinsou', 'Rolf', 'PHP');
echo $e1 -> afficher();
