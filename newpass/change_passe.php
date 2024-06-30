<?php
session_start();
include "../db_conn.php"; // Assurez-vous que ce fichier est correctement inclus

// Initialisez $errors comme un tableau vide pour éviter les notices PHP
$errors = [];

// Incluez ici la logique pour la validation et la gestion des erreurs si nécessaire
// Assurez-vous que $errors['email'] et $errors['otp_errors'] sont initialisés correctement dans `test.php`

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réinitialisation du mot de passe</title>
    <!-- Ajoutez ici vos liens vers des fichiers CSS si nécessaire -->
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
        input[type="email"] {
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Réinitialisation du mot de passe</h2>
        <form method="post" action="test.php">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <?php if(isset($errors['email'])) echo "<p class='error'>{$errors['email']}</p>"; ?>
            <?php if(isset($errors['otp_errors'])) echo "<p class='error'>{$errors['otp_errors']}</p>"; ?>
            <button type="submit" name="submit">Envoyer le code</button>
        </form>
    </div>
</body>
</html>
