<?php

class Personne {
    public $nom;
    public $prenom;
    public $date_naissance;

    public function presenter() {
        return "Je m'appelle $this->nom $this->prenom";
    }

    public function age() {
        $date_naissance = new DateTime($this->date_naissance);
        $aujourd_hui = new DateTime();
        $difference = $date_naissance->diff($aujourd_hui);
        return $difference->y;
    }
}

$personne = new Personne();
$personne->nom = "Bob";
$personne->prenom = "L'eponge";
$personne->date_naissance = "1990-05-20";


echo $personne->presenter() . "\n";
echo "J'ai " . $personne->age() . " ans\n"; 
?>
