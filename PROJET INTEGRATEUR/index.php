<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "p i";

$con = mysqli_connect($host, $username, $password, $database) or die("couldn't die");



$result = null;  
if (isset($_POST['email'])) {
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
           
            <header>Se connecter</header>
            <form action="index.php" method="post">
                <div class="feild input">
                    <label for="username"></label>
                    <input type="text" name="email" id="Email" required placeholder="Entrer votre email">
                </div>
                <?php
                if (isset($_POST['submit'])) {
                    echo '<p>';

                    if (mysqli_num_rows($result) > 0){
                        echo "Vous ne pouvez pas créer un compte avec cette adresse e-mail";
                    }
                    echo '</p>';
                   
                }
                ?>
                <div class="field input">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" autocomplete="off"  placeholder="Entrer votre mot de passe" required>
                </div>
                
                 <center><div class="field">
                    <input type="submit" class="btn" name="submit" value="Se connecter">
                </div></center>
                <div class="links">
                <a href="#"> mot de passe oublie?</a>
                </div>
                <div class="links" id="compte">
                    <a href="email.php" >créer un compte</a>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>