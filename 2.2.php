<?php
session_start();

if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    if (isset($_POST['nom']) && isset($_POST['prenom'])) {
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
    } else {
        header("Location: formulaire_session.php");
        exit();
    }
}

echo "<h1>Session ouverte</h1>";
echo "<p>Nom : " . $_SESSION['nom'] . "</p>";
echo "<p>Prénom : " . $_SESSION['prenom'] . "</p>";
?>
