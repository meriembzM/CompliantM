<?php
session_start();
error_reporting(0);
include("includes/connection.php");



$error = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE userEmail = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['login'] = $email;
        $_SESSION['id'] = $user['id'];

        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 1;

        mysqli_query($conn, "INSERT INTO userlog(uid,username,userip,status) VALUES ('{$user['id']}', '$email', '$uip', '$status')");

        header("Location: change-password.php");
        exit();
    } else {
        $_SESSION['login'] = $email;
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 0;

        mysqli_query($conn, "INSERT INTO userlog(username,userip,status) VALUES ('$email', '$uip', '$status')");
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Sign in</title>
</head>
<body>
    <form class="login-form" method="POST" action="login.php">
       <div class="container">
        <h2>Sign in</h2>
        
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <div class="input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="remember-forgot">
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>
            <a href="forgot-password.php" class="forgot-link">Forgot password?</a>
        </div>

        <button type="submit" class="btn">Sign in</button>
        <div class="register-link">
            <p>Don't have an account? <a href="Register.php">Sign up here</a>
            </p>
        </div>
       </div>
    </form>
    <div class="login-image">
        <img src="../image/undraw_secure-login_m11a.svg" alt="Secure Login Illustration" class="login-image">
    </div>
</body>
</html>