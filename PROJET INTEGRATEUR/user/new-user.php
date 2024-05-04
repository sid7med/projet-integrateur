
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
                    <select class="form-control" id="profil">
                        <option value="part">Etudiant</option>
                        <option value="prof" selected>Utilisateur</option>
                        <option value="inst">Entreprise</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
            background-color: #a75ae6;
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            height: 40px;
            line-height: 20px;
            list-style: none;
            margin-right: 100px;
            margin-left: 150px;
            outline: none;
            padding: 10px 120px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: color 100ms;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            text-decoration: none;
        }

        .button-1:hover,
        .button-1:focus {
            background-color: #a75ae6;
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
if(isset($_POST['submit'])) {
    // Vérification si le formulaire a été soumis
    // Inclure le fichier de configuration de la base de données
    include 'db_con.php';
    
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['Password'];
    
    // Vérifier si le champ login existe
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
    } else {
        $login = null;
    }
    
    // Récupérer le rôle depuis le formulaire (champ profil)
    if (isset($_POST['profil'])) {
        $role = $_POST['profil'];
    } else {
        $role = null;
    }

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO users (login, email, password, role) VALUES (?, ?, ?, ?)";
    
    // Préparer la déclaration SQL
    $stmt = $pdo->prepare($sql);
    
    // Exécuter la requête avec les données fournies
    $stmt->execute([$login, $email, $password, $role]);
    
    // Rediriger vers une page de confirmation ou afficher un message
    header("Location: users.php");
    exit();
}
?>
