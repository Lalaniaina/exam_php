<?php
session_start();

session_destroy();

header("Location: ouvrir_session.php");
exit();
?>
