<?php
session_start();

if (!isset($_SESSION['visites'])) {
    $_SESSION['visites'] = 0;
}

$_SESSION['visites']++;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer session</title>
</head>
<body>
    <h1>Cree de session</h1>
    <p>Cette page a été visitée <?php echo $_SESSION['visites']; ?> fois.</p>
    <form action="ouvrir_session.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
