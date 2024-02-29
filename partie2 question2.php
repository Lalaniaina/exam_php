<?php
include_once('config.php');

function verif($pseudo, $motdepasse, $conn) {
    $sql = "SELECT * FROM Membres WHERE pseudo = '$pseudo' AND mot_de_passe = '$motdepasse'";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        return true; 
    } else {
        return false; 
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST["pseudo"];
    $motdepasse = $_POST["motdepasse"];

    if (verif($pseudo, $motdepasse, $conn)) {
        echo "Authentification réussie. Vous pouvez accéder à la page privée.";
    } else {
        echo "Erreur d'authentification. Veuillez vérifier vos identifiants.";
    }
}

?>
