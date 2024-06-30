<?php
include "../db_conn.php";
include "test.php"; // Assuming this file handles validation and errors
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réinitialisation du mot de passe</title>
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
        input[type="password"] {
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
        <h5>Réinitialisation du mot de passe</h5>
        <form method="post" action="">
            <label for="password">Nouveau mot de passe:</label>
            <input type="password" name="password" required>
            <?php if(isset($errors['password'])) echo "<p class='error'>{$errors['password']}</p>"; ?>
            
            <label for="confirm_password">Confirmez le mot de passe:</label>
            <input type="password" name="confirm_password" required>
            <?php if(isset($errors['confirm_password'])) echo "<p class='error'>{$errors['confirm_password']}</p>"; ?>

            <button type="submit" name="reset_password">Réinitialiser le mot de passe</button>
            <?php if(isset($errors['db_error'])) echo "<p class='error'>{$errors['db_error']}</p>"; ?>
        </form>
    </div>
</body>
</html>
