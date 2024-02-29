<?php
session_start();

if (isset($_SESSION['pseudo'])) {
    echo "L'utilisateur est déjà authentifié.";
} else {
    echo "L'utilisateur n'est pas authentifié.";
}
?>
