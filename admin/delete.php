<?php
session_start();
include('../users/includes/connection.php');

if (isset($_POST['deletebtn'])) {
    $id = $_POST['delete_id'];


    if (filter_var($id, FILTER_VALIDATE_INT)) {
       
        $stmt = $conn->prepare("DELETE FROM clients WHERE ID = ?");
        $stmt->bind_param("i", $id);
        $query_run = $stmt->execute();

        if ($query_run) {
            $_SESSION['success'] = "User deleted successfully";
            header('Location: Operations.php');
        } else {
            $_SESSION['status'] = "User not deleted";
            header('Location: Operations.php');
        }

        $stmt->close();
    } else {
        $_SESSION['status'] = "Invalid ID format";
        header('Location: Operations.php');
    }
}
?>
