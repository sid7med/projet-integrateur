<?php

$con = new mysqli('localhost','root','','p i');
if(!$con)
{
    die(mysqli_error($con));
}

if (isset($_POST['save']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $niveaux = $_POST['niveaux'];
    $semester = $_POST['semester'];
  
    $sql = "INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `niveaux`, `semester`) 
            VALUES ('$matricule', '$nom', '$prenom', '$niveaux', '$semester')";
  
    $res_add = mysqli_query($con, $sql);
    
   if ($res_add) {
    header("Location: index.php?msg=Nouvel enregistrement créé avec succès");
 } else {
    echo "Failed: " . mysqli_error($conn);
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
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornflowerblue;">
        Liste des étudiants
    </nav>
    <div class="container">
        <div class="wrapper ">
            <div class="d-flex p-2  justify-content-between">
                <h2>Ajouter un utilisateur</h2>
                <div><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg></a></div>
            </div>
        </div>
        <div>
            <form action="" method="post" style="width:50vw; min-width:300px;" class="m-auto">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="matricule" class="form-label">Matricule</label>
                    <input type="tel" class="form-control" id="matricule" name="matricule">
                </div>
                <div class="mb-3">
                    <label for="niveaux" class="form-label">Niveaux</label>
                    <input type="text" class="form-control" id="niveaux" name="niveaux">
                </div>
                <div class="mb-3">
                    <label for="semester" class="form-label">Semestre</label>
                    <input type="text" class="form-control" id="semester" name="semester">
                </div>
                <input type="submit" class="btn btn-primary" name="save">
                <a href="index.php" class="btn btn-danger">Annuler</a>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="icons.js"></script>

</body>

</html>
