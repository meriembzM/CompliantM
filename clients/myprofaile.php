<?php
session_start();
include('../users/includes/connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");

if (mysqli_num_rows($query) == 1) {
    $user = mysqli_fetch_assoc($query);
} else {
    echo "User not found!";
    exit();
}
?>