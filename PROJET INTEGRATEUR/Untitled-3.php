<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "p_i";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = null;  // Initialize $result
$message = "";  // Initialize $message

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $query = "SELECT * FROM users WHERE email = '$email' AND isvalide = 0";
    $result = mysqli_query($con, $query);

    // Set the message based on the query result
    if ($result !== null && mysqli_num_rows($result) > 0) {
        $message = "Votre compte n'est pas encore validé. Souhaitez-vous continuer ?";
    } else {
        $message = "Email does not exist in the database or has already been validated.";
    }
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
    <style>
        /* Add CSS styles for hiding the message initially */
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
           
            <header>Email</header>
            <form method="post">
                <div class="feild input">
                    <label for="username">Email</label>
                    <input type="text" name="email" id="Email" placeholder="Entrer ton email">
                    <p class="hidden"><?php echo $message; ?></p>
                </div>

                <!-- Move the 'Oui' and 'Non' buttons before the 'Valide' button -->
                <div class="feild">
                    <p class="<?php echo ($result !== null && mysqli_num_rows($result) > 0) ? '' : 'hidden'; ?>">
                        <?php echo $message; ?>
                        <br>
                        <form action="continue_page.php" method="post"><input type="submit" name="oui" value="Oui"></form>
                        <form action="previous_page.php" method="post"><input type="submit" name="non" value="Non"></form>
                    </p>
                </div>

                <div class="feild">
                    <input type="submit" class="btn" value="Valide" required>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
