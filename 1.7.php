<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texte = nl2br($texte);
    echo "Texte saisi : <br>" . $texte;
}

?>
