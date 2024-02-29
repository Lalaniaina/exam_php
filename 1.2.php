<?php

echo "Date du serveur : " . date("Y-m-d") . "<br>";

$heure = date("H");

if ($heure >= 6 && $heure < 12) {
    echo "Bon matin";
} elseif ($heure >= 12 && $heure < 18) {
    echo "Bonne après-midi";
} else {
    echo "Bonne soirée";
}

?>
