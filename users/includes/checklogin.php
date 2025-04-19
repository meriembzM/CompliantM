<?php
session_start(); 
if (!isset($_SESSION['user_id'])) {
    header("Location: ../users/login.php");
    exit();
}

if ($_SESSION['role'] !== 'admin') {
    echo "Accès refusé. Réservé aux administrateurs.";
    exit();
}
?>
