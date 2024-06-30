<?php
// session_start();
include "../db_conn.php";
include "test.php"; // Assuming this file handles validation and errors

$errors = [];

if (isset($_POST['verify'])) {
    $otp = $_POST['otp'];

    // Basic validation
    if (empty($otp)) {
        $errors['otp'] = "Le code de vérification est requis.";
    }

    if (empty($errors)) {
        // Here you should verify the OTP, e.g., check it against the database
        // For example:
        $query = "SELECT * FROM password_resets WHERE otp = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $otp);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // OTP is valid
            // Redirect to the password reset form
            header("Location: reset_password.php");
            exit();
        } else {
            $errors['otp'] = "Code de vérification incorrect.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification du code</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/templatemo-first-portfolio-style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #14b789;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        h5{
            color: #14b789;
            text-align:center ;
        }
    </style>
</head>
<body>
    <div class="container">
        <h5>Vérification du code</h5>
        <form method="post" action="">
            <label for="otp">Code de vérification:</label>
            <input type="text" name="otp" required>
            <?php if(isset($errors['otp'])) echo "<p class='error'>{$errors['otp']}</p>"; ?>

            <button type="submit" name="verify">Vérifier le code</button>
        </form>
    </div>
</body>
</html>
