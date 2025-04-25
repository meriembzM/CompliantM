<?php
session_start();
error_reporting(E_ALL); 
include('../users/includes/connection.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $stmt = mysqli_prepare($conn, "INSERT INTO clients (name, email, password) VALUES (?, ?, ?)");
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);

        
        if (mysqli_stmt_execute($stmt)) {
            echo "User created successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare statement.";
    }
}

$query = "SELECT * FROM clients"; 
$query_run = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidebaradmin.css">
    <link rel="stylesheet" href="../css/operations.css">
    <title>Admin | Operation</title>
</head>
<body>
   

    <?php include('sidebaradmin.php')?>
    <div class="main-content">
        <div class="menu-container">
            <div class="menu-item" onclick="toggleMenu()">Create</div>
            <div class="dropdown-menu" id="dropdown-menu" style="display: none;">
                <form method="POST" action="Operations.php">
                    <h2>Create user</h2>
                    <label for="name">Name</label>
                    <input name="name" type="text" id="name" placeholder="Name" required>
                    <label for="email">Email</label>
                    <input name="email" type="email" id="email" placeholder="Email" required>
                    <button type="submit" > submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        
    <table class="table table-bordered" class="table-wrapper" id="dataTable" style="width: 100%; cellspacing: 0;">
        <thead>
            <tr>
                <th colspan="6">User List</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['ID']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td>****</td> 
                        <td><button type="button" name="updatebtn" class="btn btn-update" ><a href="update.php?ID=<?php echo $row['ID']; ?>">Update</a></button></td>
                        <form action="delete.php" method="POST">
                         <input type="text" name="delete_id" value="<?php echo $row['ID']; ?>" hidden>   
                        <td><button type="submit" name="deletebtn" class="btn btn-delete">Delete</button></td>
                        </form>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>No users found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
        </div>
    <script src="../js/opr.js"></script>
    <script src="../js/mode.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>
