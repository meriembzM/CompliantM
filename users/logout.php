<?php
session_start();
include("includes/connection.php");
if (isset($_SESSION['login'])) {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("location:http://$host$uri/index.php");
    exit();
}
?>