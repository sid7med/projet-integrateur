<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "p_i";

$con = mysqli_connect($host, $username, $password, $database) or die("couldn't connect");



$result = null;  
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $query = "SELECT * FROM users WHERE email = '$email' AND is_valid = 0";
    $result = mysqli_query($con, $query);
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
           
            <header>Email</header>
            <form method="post">
                <div class="feild input">
                    <label for="username"></label>
                    <input type="text" name="email" id="Email" placeholder="Entrez votre adresse e-mail ">
                     <?php
                    if (isset($_POST['submit'])) {
                        echo '<p>';
                        if (mysqli_num_rows($result) > 0) {
                            echo "Votre compte n'est pas encore validé. Voulez-vous continuer ?";    
                        } 
                        else {
                            echo "Vous ne pouvez pas créer un compte avec cette adresse e-mail";
                        }
                        echo '</p>';
                       
                    }
                    ?> 
                </div>
                <span class="val">
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Valider">
                        </div>       
                        <div class="annul">
                    <input type="reset"  class="ann"  value="Annuler">
                </div>
                </span>
                
            </form>
        </div>
    </div>
</body>
</html>

