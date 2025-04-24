<?php
session_start();
include('includes/connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    
    $update_query = "UPDATE users SET name = '$name', email = '$email' WHERE id = $user_id";
    if (mysqli_query($conn, $update_query)) {
        $success = "Profile updated successfully.";
    } else {
        $error = "Error updating profile: " . mysqli_error($conn);
    }
}
$query = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");
if (mysqli_num_rows($query) == 1) {
    $user = mysqli_fetch_assoc($query);
} else {
    echo "User not found!";
    exit();
}
?>