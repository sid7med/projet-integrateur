
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>New user</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .mb {
            margin-top: 90px;
        }
    </style>
</head>

<body>
    <?php include 'user-nav.php'; ?>

    <div class="container">
        <div class="wrapper ">
            <div class="d-flex p-2  justify-content-between">
                <div><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg></a></div>
            </div>
        </div>
        <div>
            <form action="" method="post" style="width:50vw; min-width:300px;" class="m-auto">
                <div class="mb">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="Password" name="Password">
                        <!-- Ajout de l'icône pour le bouton -->
                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Role" class="form-label">Rôle</label></br>
                    <select class="form-control" id="profil" name="role"> <!-- Ajout de l'attribut name pour le champ role -->
                        <option value="part">Etudiant</option>
                        <option value="prof" selected>Utilisateur</option>
                        <option value="inst">Entreprise</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="button-1">Submit</button> <!-- Modification pour utiliser un bouton de soumission -->
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="icons.js"></script>

    <style>
        .button-link {
            text-decoration: none;
        }

        /* CSS */
        .button-1 {
            background-color: #007bff;
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-block;
            font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 50;
            height: 50%;
            width: 50vw;
            min-width:30px;
            line-height: 20px;
            list-style: none;
            margin-left: auto;
            margin-right: auto;
            outline: none;
            padding: 10px 110px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: color 100ms;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            text-decoration: none;
            color: white;
            padding: 10px;
            text-decoration: none;
        }

        .button-1:hover,
        .button-1:focus {
            background-color: #007bff;
        }
    </style>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('Password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });

    </script>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification de l'existence des clés dans $_POST
    if (isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["Password"]) && isset($_POST["role"])) {
        // Connexion à la base de données (modifier avec vos informations de connexion)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "p_i";

        // Création de la connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Récupération des données du formulaire
        $login = $_POST["login"];
        $email = $_POST["email"];
        $password = $_POST["Password"]; // Correction du nom de la clé
        $role = $_POST["role"];

        // Requête SQL pour insérer les données dans la table users
        $sql = "INSERT INTO users (login, email, password, role) VALUES ('$login', '$email','$password', '$role')";

        if ($conn->query($sql) === TRUE) {
            // Redirection vers users.php (après les modifications de l'entête)
            header("Location: users.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        // Si les clés dans $_POST ne sont pas définies
        echo "Error: Missing form data";
    }
}
?>
