<?php
session_start();

if (isset($_POST['pseudo'])) {
    $_SESSION['pseudo'] = $_POST['pseudo'];
}
?>

<a href="welcome.phtml">Aller à la page de bienvenue</a>