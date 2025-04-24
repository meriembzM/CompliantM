<?php 
session_start();
error_reporting(0);
include('includes/connection.php');

/*if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}*/

$logged_in = true;
?>

<?php
include('includes/sidebar.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getion de reclamation</title>
    <link href="https://fonts.googleapis.com/css2?family=Miniver&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    
    <script src="../js/app.js" defer></script>
    
</head>
<body> 
        <div class="top-right-buttons">
  
      <a href="login.php" class="btn">Sign in</a>
      <a href="Register.php" class="btn outline">Sign up</a>
 
      <a href="logout.php" class="btn outline">Logout</a>
  
</div>

        <section class="hero-section">
            <div class="hero-content">
                <div class="hero-details">
                    <h2 class="title">Complaint Management</h2>
                    <p class="description">A platform to manage and track customer complaints
                         ensuring fast resolution and improved service quality</p>
                    <div class="buttons">
                        <a href="formular.php" class="submit">Submit</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="../image/undraw_software-engineer_xv60 (1).svg" alt="" class="hero-image">
                </div>
                    
            </div>
        </section>
 <script src="../js/mode.js"></script>
</body>
</html>