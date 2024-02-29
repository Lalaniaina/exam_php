<?php

class Personne {
    public $nom;
    public $prenom;

    public function presenter() {
        return "Je m'appelle $this->nom $this->prenom";
    }
}


$personne1 = new Personne();
$personne1->nom = "";
$personne1->prenom = "";

$personne2 = new Personne();
$personne2->nom = "";
$personne2->prenom = "";


echo $personne1->presenter() . "<br>"; 
echo $personne2->presenter(); 
?>