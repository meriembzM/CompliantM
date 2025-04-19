<?php
session_start();
include('../users/includes/connection.php');

if (isset($_POST['change'])) {
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);

    if (empty($email)) {
        $errormsg = "Invalid email";
    } elseif (empty($contact)) {
        $errormsg = "Invalid contact number";
    } elseif (empty($_POST['password'])) {
        $errormsg = "Invalid password";
    } else {
        $query = mysqli_query($conn, "SELECT * FROM clients WHERE email='$email' AND contactNo='$contact'");
        $num = mysqli_fetch_array($query);

        if ($num > 0) {
            mysqli_query($conn, "UPDATE clients SET password='$password' WHERE email='$email' AND contactNo='$contact'");
            $msg = "Password Changed Successfully";
        } else {
            $errormsg = "Invalid email or contact number";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/forget-pass.css">
    <title>Forgot Password</title>
</head>
<body>
    <form class="login-form" method="POST" action="forgot-password.php">
        <div class="container">
            <h2>Forgot Password</h2>

            <div class="input-box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <?php if (!empty($errormsg)): ?>
                 <div class="error-message"><?php echo $errormsg; ?></div>
                <label for="contact">Contact No</label>
                <input type="text" id="contact" name="contact" placeholder="Contact No" required>
                <?php elseif (!empty($msg)): ?>
                <div class="success-message"><?php echo $msg; ?></div>
            <?php endif; ?>
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" placeholder="New Password" required>

                <button type="submit" name="change" class="btn">Change Password</button>
            </div>
        </div>
    </form>
</body>
</html>
