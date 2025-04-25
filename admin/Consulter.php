<?php 
session_start();
include('../users/includes/connection.php');
/*if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php'); 
    exit();
}*/

$query = "SELECT * FROM reclamation WHERE status = 'pending'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Complaints</title>
    
</head>
<body>
    <div class="container">
        <h1>Manage Complaints</h1>
        <table>
            <thead>
                <tr>
                    <th>Complaint ID</th>
                    <th>Client Name</th>
                    <th>Complaint Text</th>
                    <th>Complaint Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { 
                   
                    $client_query = "SELECT name FROM clients WHERE id = ".$row['client_id'];
                    $client_result = mysqli_query($conn, $client_query);
                    $client = mysqli_fetch_assoc($client_result);
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $client['name']; ?></td>
                        <td><?php echo htmlspecialchars($row['complaint_text']); ?></td>
                        <td><?php echo $row['complaint_date']; ?></td>
                        <td>
                            <a href="manage_complaints.php?action=accept&id=<?php echo $row['id']; ?>">Accept</a>
                            <a href="manage_complaints.php?action=refuse&id=<?php echo $row['id']; ?>">Refuse</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
