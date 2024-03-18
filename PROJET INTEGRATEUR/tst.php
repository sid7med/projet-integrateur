<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "pi";


$con = mysqli_connect($host, $username, $password, $database);


if (!$con) {    
    die("Connection failed: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($con, $_POST['email']);


$query = "SELECT * FROM users WHERE email = '$email' AND isvalide = 0";
$result = mysqli_query($con, $query);


mysqli_close($con);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tst</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
           
            <header>Email</header>
            <form  method="post">
                <div class="feild input">
                    <label for="username">Email</label>
                    <input type="text" name="email" id="Email"   placeholder="Entrer ton email">
                    <p><?php 
 if (mysqli_num_rows($result) > 0) {

    echo "Votre compte n'est pas encore validé. Souhaitez-vous continuer ?";
    echo '<form action="continue_page.php" method="post"><input type="submit" name="oui" value="Oui"></form>';
    echo '<form action="previous_page.php" method="post"><input type="submit" name="non" value="Non"></form>';
} else {
    echo "Email does not exist in the database or has already been validated.";
}?>
</p>
                </div>

                   <div class="feild">                    
                    <input type="submit" class="btn" value="Valide" required>
                </div>
                <!-- <div class="links"> -->
                    <!-- mot de passe oublie?<a href="register.html">changer le mot de passe</a>
                </div> -->
            </form>
        </div>
    </div>
</body>
</html>