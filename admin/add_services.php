<?php
session_start();

include('../users/includes/connection.php');

if (isset($_POST['submit'])) {
    $service_code = $_POST['service_code'];
    $service_name = $_POST['service_name'];
    $creationDate = date('Y-m-d H:i:s');
    $updationDate = date('Y-m-d H:i:s');

    $query = mysqli_query($conn, "INSERT INTO service (service_code, nom, creationDate, updationDat) 
    VALUES ('$service_code', '$service_name', '$creationDate', '$updationDate')");

if ($query) {
    echo "<script>alert('Service added successfully');</script>";
} else {
    echo "<p style='color:red;'>MySQL Error: " . mysqli_error($conn) . "</p>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/service.css">
    <link rel="stylesheet" href="../css/sidebaradmin.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Add Service</title>
    
</head>
<body>
    <?php include('header.php'); ?>
    <?php include('sidebaradmin.html'); ?>

    <div class="container">
        <h2>Add Service</h2>
        <form method="POST" action="serviceR.php">
            <div class="form-group">
                <label for="service_code">Service Code:</label>
                <input type="text" name="service_code" required>
                
                <label for="service_name">Service Name:</label>
                <input type="text" name="service_name" required>

                <button type="submit" name="submit">Add Service</button>
            </div>
        </form>
    </div>
    <script src="../js/mode.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>