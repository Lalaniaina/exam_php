<?php
session_start();

$conn = mysqli_connect("localhost", "utilisateur", "mot_de_passe", "nom_de_votre_base");

if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == "recherche") {
        $recherche = $_POST["recherche"];
        $query = "SELECT * FROM annuaire WHERE nom LIKE '%$recherche%' OR prenom LIKE '%$recherche%'";
        $result = mysqli_query($conn, $query);
        $resultats = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } elseif ($_POST["action"] == "ajout") {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $numero = $_POST["numero"];
        $query = "INSERT INTO annuaire (nom, prenom, numero) VALUES ('$nom', '$prenom', '$numero')";
        mysqli_query($conn, $query);
    } elseif ($_POST["action"] == "modification") {
        $id = $_POST["id"];
        $numero = $_POST["numero"];
        $query = "UPDATE annuaire SET numero = '$numero' WHERE id = $id";
        mysqli_query($conn, $query);
    } elseif ($_POST["action"] == "suppression") {
        $id = $_POST["id"];
        $query = "DELETE FROM annuaire WHERE id = $id";
        mysqli_query($conn, $query);
    }
}

mysqli_close($conn);
?>
