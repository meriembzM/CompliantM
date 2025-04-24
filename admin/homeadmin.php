<?php
session_start();
include("../users/includes/connection.php");
//include("../users/includes/checklogin.php");
//check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <link rel="stylesheet" href="../css/add-customer.css">
    <link rel="stylesheet" href="../css/sidebaradmin.css">
    <link rel="stylesheet" href="../css/stylehome-admin.css">
    <link rel="stylesheet" href="../css/header.css">

    <title>Home | Admin</title>
</head>
<body>
    <?php include('header.php'); ?>
    <?php include('sidebaradmin.html'); ?>
    <script src="../js/mode.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>
