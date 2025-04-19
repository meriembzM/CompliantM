<?php
session_start();
include('../users/includes/connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $address = $_POST['address'];
    $state = $_POST['state'];

    $query = mysqli_query($conn, "INSERT INTO clients (name, email, password, address, state) 
        VALUES ('$name', '$email', '$password', '$address', '$state')") or die(mysqli_error($conn));

    if ($query) {
        echo "<script>alert('Customer created successfully');</script>";
    } else {
        echo "<script>alert('Something went wrong, please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add-customer.css">
    <link rel="stylesheet" href="../css/sidebaradmin.css">
    <title>Add Customer</title>

</head>
<body>

<?php include('sidebaradmin.html'); ?>

<div class="container">
    <h2>Add Customer</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>

            <label for="state">State:</label>
            <input type="text" name="state" required>

            <button type="submit" name="submit">Add Customer</button>
        </div>
    </form>
</div>
<script src="../js/mode.js"></script>
<script src="../js/app.js"></script>
</body>
</html>
