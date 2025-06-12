

<?php 
session_start();
 if(isset($_SESSION['pseudo'])) {
     session_destroy();
     echo "Bienvenue !";
 } 
 
?>