<?php
session_start();
include('../users/includes/connection.php');


$res = "SELECT * FROM clients"; 
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

    <title>Client List</title>
</head>
<body>
   
<?php include('sidebaradmin.php'); ?>

    <div class="container">
        <h2>Customer List</h2>

        <?php
        if ($result) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Name</th><th>First Name</th><th>Email</th><th>Password</th><th>Address</th><th>State</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['ID']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['prenom']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['password']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['State']}</td>";
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
