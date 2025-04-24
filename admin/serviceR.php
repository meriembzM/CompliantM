<?php
session_start();
include('../users/includes/connection.php');
$res = "SELECT * FROM service"; 
$result = mysqli_query($conn, $res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidebaradmin.css">
    <link rel="stylesheet" href="../css/result.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Services List</title>
</head>
<body>
    <?php include('header.php'); ?>
    <?php include('sidebaradmin.html'); ?> 

    <div class="container">
        <h2>Services List</h2>

        <?php
        if ($result) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Name</th><th>Creation Date</th><th>Updating Date</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['nom']}</td>";
                echo "<td>{$row['creationDate']}</td>";
                echo "<td>{$row['updationDat']}</td>"; // تأكد أن هذا هو الاسم الصحيح في جدولك
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
        ?>
        <script src="../js/mode.js"></script>
        <script src="../js/app.js"></script>
    </div>
</body>
</html>
