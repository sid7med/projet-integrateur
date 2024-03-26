
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
                    <label for="username">verifier l'email</label>
                    <input type="text" name="email" id="Email" placeholder="Entrez le code de validation">
                </div>
                <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "p i";

$con = mysqli_connect($host, $username, $password, $database) or die("Couldn't connect to database");

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    // Check if the email already exists and is not verified
    $query = "SELECT * FROM users WHERE email = '$email' AND is_valid = 0";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Generate a verification token
        $verification_token = md5(uniqid(rand(), true));
        
        // Update the database with the verification token
        $update_query = "UPDATE users SET verification_token = '$verification_token' WHERE email = '$email'";
        mysqli_query($con, $update_query);
        
        // Send email with verification link
        $verification_link = "http://yourwebsite.com/verify.php?token=$verification_token";
        $to = $email;
        $subject = "Email Verification";
        $message = "Click the following link to verify your email: $verification_link";
        $headers = "From: yourname@example.com";
        mail($to, $subject, $message, $headers);

        echo "An email with a verification link has been sent to $email.";
    } else {
        echo "You cannot create an account with this email address.";
    }
}

mysqli_close($con);
?>

                <div class="feild">                    
                    <input type="submit" class="btn" value="Valide" required name="valide">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

