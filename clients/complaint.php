<?php
session_start();
error_reporting(0);
include('../users/includes/connection.php'); 

// التحقق من تسجيل الدخول (اختياري)
// if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
//     header('Location: login.php');
//     exit;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_service = mysqli_real_escape_string($conn, $_POST['service']);
    $niveau = mysqli_real_escape_string($conn, $_POST['complaint_level']);
    $description = mysqli_real_escape_string($conn, $_POST['text']);

    $sql = "INSERT INTO reclamation (id_service, niveau, description) 
            VALUES ('$id_service', '$niveau', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Complaint submitted successfully');</script>";
    } else {
        echo "<script>alert('Error submitting complaint');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form</title>
    <link rel="stylesheet" href="../css/complaint.css">
    <link rel="stylesheet" href="../css/sidbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("sidbar.html"); ?>
    
    <div class="content">
    <h1 class="form-title">Complaint</h1>

        <div class="form-container">
            <form method="POST" action="">
                <div class="input1">
                    <label for="service">Services</label>
                    <select name="service" id="service" required>
                        <option value="">-- Select Service --</option>
                        <option value="">-- thl --</option>
                    </select>
                </div>

                <div class="input2">
                    <label for="complaint_level">Complaint Level</label>
                    <select name="complaint_level" id="complaint_level" required>
                        <option value="">-- Select Level --</option>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>

                <div class="input3">
                    <label for="text">Your Complaint</label>
                    <textarea name="text" id="text" placeholder="Describe your complaint..." rows="6" required></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="complaint.js"></script>
</body>
</html>
