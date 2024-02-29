<?php
    if (isset($_GET["submit"])){
        $nom = $_GET["nom"];
        $prenom = $_GET["prenom"];
        $vins = $_GET["nationalite"];
        $sexe = $_GET["sexe"];

        echo "<h3> Voici les infos </h3>";
        echo "Nom: ".$nom."</br>".
             "Prenom: ".$prenom."</br>".
             "Sexe: ".$sexe."</br>".
             "Vins: ".$vins;
    } exit;
?>