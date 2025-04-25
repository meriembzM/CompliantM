<?php
session_start();
include("../users/includes/connection.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updatebtn'])){
 $id = $_POST['id'];
 $username = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $query = "UPDATE clients SET name='$username', email='$email', password='$password' WHERE ID='$id'";
 $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION ['success'] = "User updated successfully";
        header('Location: Operations.php');
    } else {
        $_SESSION ['status'] = "User not updated";
        header('Location: Operations.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidebaradmin.css">
    <link rel="stylesheet" href="../css/update.css">
    <title>Admin |update</title>
</head>
<body>

<?php

include("../users/includes/connection.php");
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $result = mysqli_query($conn, "SELECT * FROM clients WHERE ID = '$id'");
    $row = mysqli_fetch_assoc($result);
} else {
   
    echo "No user ID specified.";
    exit;
}
$result = mysqli_query($conn, "SELECT * FROM clients WHERE ID = '$id'");
$row = mysqli_fetch_assoc($result);
?>

<form class="form" method="POST" action="update.php">
    <h2>Update User</h2>
    <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="<?php echo $row['password']; ?>" required>

    <input type="submit" name="updatebtn" value="Update" class="btn-create">
</form>

<script src="../js/mode.js"></script>
<script src="../js/app.js"></script>
</body>
</html>