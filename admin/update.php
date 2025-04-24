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
    <link rel="stylesheet" href="../css/updata.css">
    <title>Admin |update</title>
</head>
<body>

<?php include('sidebaradmin.php'); ?>
<form class="form" method="POST" action="update.php">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="updatebtn" value="Update" class="btn-create">
</form>
<script src="../js/mode.js"></script>
<script src="../js/app.js"></script>
</body>
</html>