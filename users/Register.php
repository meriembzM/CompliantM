<?php 
session_start();
error_reporting(0);
include('includes/connection.php');

if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Sign in</title>
</head>
<body>
    <form class="login-form">
       <div class="container">
        <h2>Sign in</h2>
        <div class="input-box">
            <label for="name">Name</label>
        <input name="name" type="text" id="name" placeholder="name" required>
        <label for="email">Email</label>
       <input name="email" type="email" id="email" placeholder="email" required>
       <input name="password" type="password" placeholder="Password" required>
            <br>
            <label for="password">Password</label>
            <input type="password"  placeholder="Password" required >
        </div>
        <div class="remember-forgot">
            <label>
                <input type="checkbox" > Remember me
            </label>
            <a href="#" class="forgot-link">Forgot password?</a>
        </div>
        <button type="submit" class="btn">Sgin up</button>
        <div class="register-link">
            <p>you have a count <a href="Login.html">Sign in here</a></p>
        </div>
       </div>
    </form>
</body>
</html>