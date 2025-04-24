<?php
session_start();
include('../users/includes/connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $address = $_POST['address'];
    $state = $_POST['state'];

    $query = mysqli_query($conn, "INSERT INTO clients (name, email, password, address, state) 
        VALUES ('$name', '$email', '$password', '$address', '$state')") or die(mysqli_error($conn));

    if ($query) {
        echo "<script>alert('Customer created successfully');</script>";
    } else {
        echo "<script>alert('Something went wrong, please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add-customer.css">
    <link rel="stylesheet" href="../css/sidebaradmin.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Add Customer</title>

</head>
<body>

<?php include('sidebaradmin.php'); ?>
<h2>Add Customer</h2>
<div class="container">
   
    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="address">Address:</label>
            <input type="text"class="state" name="address" required>
            <label for="state">State:</label>
<select name="state" class="state" required>
    <option value="">-- Select a Wilaya --</option>
    <option value="Adrar">Adrar</option>
    <option value="Chlef">Chlef</option>
    <option value="Laghouat">Laghouat</option>
    <option value="Oum El Bouaghi">Oum El Bouaghi</option>
    <option value="Batna">Batna</option>
    <option value="Béjaïa">Béjaïa</option>
    <option value="Biskra">Biskra</option>
    <option value="Béchar">Béchar</option>
    <option value="Blida">Blida</option>
    <option value="Bouira">Bouira</option>
    <option value="Tamanrasset">Tamanrasset</option>
    <option value="Tébessa">Tébessa</option>
    <option value="Tlemcen">Tlemcen</option>
    <option value="Tiaret">Tiaret</option>
    <option value="Tizi Ouzou">Tizi Ouzou</option>
    <option value="Algiers">Algiers</option>
    <option value="Djelfa">Djelfa</option>
    <option value="Jijel">Jijel</option>
    <option value="Sétif">Sétif</option>
    <option value="Saïda">Saïda</option>
    <option value="Skikda">Skikda</option>
    <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
    <option value="Annaba">Annaba</option>
    <option value="Guelma">Guelma</option>
    <option value="Constantine">Constantine</option>
    <option value="Médéa">Médéa</option>
    <option value="Mostaganem">Mostaganem</option>
    <option value="MSila">M'Sila</option>
    <option value="Mascara">Mascara</option>
    <option value="Ouargla">Ouargla</option>
    <option value="Oran">Oran</option>
    <option value="El Bayadh">El Bayadh</option>
    <option value="Illizi">Illizi</option>
    <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
    <option value="Boumerdès">Boumerdès</option>
    <option value="El Tarf">El Tarf</option>
    <option value="Tindouf">Tindouf</option>
    <option value="Tissemsilt">Tissemsilt</option>
    <option value="El Oued">El Oued</option>
    <option value="Khenchela">Khenchela</option>
    <option value="Souk Ahras">Souk Ahras</option>
    <option value="Tipaza">Tipaza</option>
    <option value="Mila">Mila</option>
    <option value="Aïn Defla">Aïn Defla</option>
    <option value="Naâma">Naâma</option>
    <option value="Aïn Témouchent">Aïn Témouchent</option>
    <option value="Ghardaïa">Ghardaïa</option>
    <option value="Relizane">Relizane</option>
    <option value="Timimoun">Timimoun</option>
    <option value="Bordj Badji Mokhtar">Bordj Badji Mokhtar</option>
    <option value="Ouled Djellal">Ouled Djellal</option>
    <option value="Beni Abbès">Beni Abbès</option>
    <option value="In Salah">In Salah</option>
    <option value="In Guezzam">In Guezzam</option>
    <option value="Touggourt">Touggourt</option>
    <option value="Djanet">Djanet</option>
    <option value="El M'Ghair">El M'Ghair</option>
    <option value="El Menia">El Menia</option>
</select>


            <button type="submit" name="submit">Add Customer</button>
        </div>
    </form>
</div>
<script src="../js/mode.js"></script>
<script src="../js/app.js"></script>
</body>
</html>
