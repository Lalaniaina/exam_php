<?php

class Personne {
    public $nom;
    public $prenom;

    public function presenter() {
        return "Je m'appelle $this->nom $this->prenom";
    }
}

$personne = new Personne();
$personne->nom = "";
$personne->prenom = "";
echo $personne->presenter();
?>
