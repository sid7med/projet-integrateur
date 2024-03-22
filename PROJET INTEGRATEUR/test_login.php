<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "pi";

// // Connexion à la base de données
// $con = mysqli_connect($host, $username, $password, $database) or die("Impossible de se connecter à la base de données");

// // Vérification de l'envoi du formulaire de connexion
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $password = mysqli_real_escape_string($con, $_POST['password']);

//     // Requête pour vérifier les informations de connexion dans la base de données
//     $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND is_valid = 1";
//     $result = mysqli_query($con, $query);

//     if (mysqli_num_rows($result) == 1) {
//         // L'utilisateur est authentifié avec succès
//         // Vous pouvez rediriger l'utilisateur vers une page sécurisée ici
//         header("Location: home.php");
//         exit();
//     } else {
//         // Échec de l'authentification
//         echo "Email ou mot de passe incorrect.";
//     }
// }

// mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        header {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .field {
            margin-bottom: 20px;
        }

        .field label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #666;
        }

        .field input[type="text"],
        .field input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .btn {
            background-color: #4c44b6;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #665ec5;
        }

        p {
            margin-top: 15px;
            font-size: 14px;
            color: #666;
        }

        a {
            color: #4c44b6;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #665ec5;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="box form-box">
        <header>Se connecter</header>
        <form method="post">
            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required placeholder="Entrer votre email">
            </div>
            <div class="field input">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required placeholder="Entrer votre mot de passe">
            </div>
            <div class="field">
                <input type="submit" class="btn" name="login" value="Se connecter">
            </div>
        </form>
        <div class="field">
            <p>Vous n'avez pas de compte ? <a href="inscription.php">S'inscrire</a></p>
        </div>
    </div>
</div>
</body>
</html>
