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

    <title>Home | Admin</title>
</head>
<body>
    
    <?php include('sidebaradmin.html'); ?>
    <?php include('add-complaint.php'); ?>
    <script src="../js/mode.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>
