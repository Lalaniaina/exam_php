<?php
// Définition des variables d'environnement
$variables_env = array(
    '$SERVER_ADDR' => $_SERVER['SERVER_ADDR'],
    '$HTTP_HOST' => $_SERVER['HTTP_HOST'],
    '$REMOTE_ADDR' => $_SERVER['REMOTE_ADDR'],
    'gethostbyAddr($REMOTE_ADDR)' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
    '$HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT']
);
?>

<table border="1">
    <tr>
        <th>Variable</th>
        <th>Valeur</th>
    </tr>
    <?php foreach ($variables_env as $variable => $valeur) { ?>
        <tr>
            <td><?php echo $variable; ?></td>
            <td><?php echo $valeur; ?></td>
        </tr>
    <?php } ?>
</table>