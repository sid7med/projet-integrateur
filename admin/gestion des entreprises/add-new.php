
<?php
// include "nav.php";   

// Connexion à la base de données
$con = new mysqli('localhost', 'root', '', 'p_i');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['save'])) {
    $Nom_enterprise = $_POST['Nom_entreprise'];
    $Adresse = $_POST['Adresse'];
    $Domaine_activite = $_POST['Domaine_activite'];
    $Email = $_POST['Email'];
    $Nom_profitionelle = $_POST['Nom_profitionelle']; // Correction du nom de la variable
    // Logo doit être traité différemment car il s'agit d'un fichier uploadé
    $logo = $_FILES['logo']['name'];  // Récupère le nom du fichier
    

    // Déplacer le fichier uploadé vers un dossier de destination
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true); // Crée le dossier avec les permissions nécessaires
    }
    $target_file = $target_dir . basename($_FILES["logo"]["name"]);
    move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);

    $sql = "INSERT INTO `entreprise` (`Nom_enterprise`, `Adresse`, `Domaine_activite`, `Email`, `Nom_profitionelle`, `logo`) 
            VALUES ('$Nom_enterprise', '$Adresse', '$Domaine_activite', '$Email', '$Nom_profitionelle', '$logo')";
 
    if ($con->query($sql) === TRUE) {
        header("Location: index.php?msg=Nouvel enregistrement créé avec succès");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
            background-color: #d6eed6;
        }
        h2{
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container"> 
        <div class="wrapper ">
            <div class="d-flex p-2 justify-content-between">
                <!-- <h2 class="text-center">Ajouter un utilisateur</h2> -->
                <div><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg></a></div>
            </div><h2 class="text-center">Ajouter un entreprise</h2>
        </div>
        <div>
            <form action="" method="post" style="width:50vw; min-width:300px;" class="m-auto" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="Nom_entreprise" class="form-label">Nom_entreprise</label>
                    <input type="text" class="form-control" id="Nom_entreprise" name="Nom_entreprise">
                </div>
                <div class="mb-3">
                    <label for="Adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="Adresse" name="Adresse">
                </div>
                <div class="mb-3">
                    <label for="Domaine_activite" class="form-label">Domaine_activite</label>
                    <input type="tel" class="form-control" id="Domaine_activite" name="Domaine_activite">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="Email" name="Email">
                </div>
                <div class="mb-3">
                    <label for="Nom_profitionelle" class="form-label">Nom_profitionelle</label>
                    <input type="text" class="form-control" id="Nom_profitionelle" name="Nom_profitionelle">
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">logo</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <!-- <div class="mb-3">
                    <label for="Action" class="form-label">Action</label>
                    <input type="text" class="form-control" id="Action" name="Action">
                </div> -->
                <input type="submit" class="btn btn-primary" name="save" value="Ajouter">
                <a href="index.php" class="btn btn-danger">Annuler</a>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="icons.js"></script>

</body>

</html>
