<?php 
session_start();
error_reporting(0);
include('includes/connection.php');

if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $complaint = mysqli_real_escape_string($conn, $_POST['complaint']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $priority = mysqli_real_escape_string($conn, $_POST['priority']);

    $sql = "INSERT INTO complaints (name, email, complaint, type, priority, status, created_at)
            VALUES ('$name', '$email', '$complaint', '$type', '$priority', 'Pending', NOW())";

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
    <link rel="stylesheet" href="complaint.css">
    <title>Complaint Form</title>
</head>
<body>
    <form action="complaint.php" method="post">
        <div class="container">
            <h2>Complaint Form</h2>
            <div class="input-box">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $_SESSION['name']; ?>" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" required>

                <label for="complaint">Complaint</label>
                <textarea id="complaint" name="complaint" rows="4" placeholder="Describe your complaint..." required></textarea>

                <label for="type">Type of Complaint</label>
                <input type="text" id="type" name="type" placeholder="e.g., Service, Product..." required>

                <label for="priority">Priority</label>
                <select name="priority" id="priority" required>
                    <option value="">--Select Priority--</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
            <button type="submit" class="btn">Submit Complaint</button>
        </div>
    </form>
</body>
</html>
