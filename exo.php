<?php
class Tableau {
    public $tableau;

    public static function remplir($n) {
        $tableau = [];
        for ($i = 0; $i < $n; $i++) {
            $tableau[$i] = rand(1, 100);
        }
        return $tableau;
    }

    public static function trier($tableau) {
        sort($tableau);
        return $tableau;
    }

    public static function afficher($tableau) {
        foreach ($tableau as $element) {
            echo $element . ' ';
        }
    }
}

$n = 10;
$tableau = Tableau::remplir($n);
echo "Tableau non trié : ";
Tableau::afficher($tableau);    
echo "<br>";
$tableau = Tableau::trier($tableau);
echo "Tableau trié : ";
Tableau::afficher($tableau);
?>