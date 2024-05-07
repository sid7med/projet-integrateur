<?php

include "db_conn.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM `etudiant` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $matricule = $row['matricule'];
        $niveaux = $row['niveaux'];
        $semester = $row['semester'];
    } else {
        header("Location: index.php?msg=Étudiant non trouvé");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $niveaux = $_POST['niveaux'];
    $semester = $_POST['semester'];

    $sql = "UPDATE `etudiant` SET `nom`='$nom', `prenom`='$prenom', `niveaux`='$niveaux', `semester`='$semester' WHERE `id`='$id'";

    $res_update = mysqli_query($conn, $sql);

    if ($res_update) {
        header("Location: index.php?msg=Enregistrement modifié avec succès");
        exit();
    } else {
        echo "Échec : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Modifier un étudiant</title>
    
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornflowerblue;">
        Modifier un étudiant
    </nav>
    <div class="container">
        <form action="" method="post" onsubmit="return confirmSubmit();" style="width:50vw; min-width:300px;" class="m-auto">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $nom; ?>">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $prenom; ?>">
            </div>
            <div class="mb-3">
                <label for="matricule" class="form-label">Matricule</label>
                <input type="text" class="form-control" id="matricule" name="matricule" value="<?php echo $matricule; ?>">
            </div>
            <div class="mb-3">
                <label for="niveaux" class="form-label">Niveaux</label>
                <input type="text" class="form-control" id="niveaux" name="niveaux" value="<?php echo $niveaux; ?>">
            </div>
            <div class="mb-3">
                <label for="semester" class="form-label">Semestre</label>
                <input type="text" class="form-control" id="semester" name="semester" value="<?php echo $semester; ?>">
            </div>
            <button type="submit" class="btn btn-primary">modifier</button>
            <a href="index.php" class="btn btn-danger">Annuler</a>
            <!-- Inclusion de la bibliothèque JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        </form>
    </div>
    

    <script src="js/bootstrap.min.js"></script>
    <script>
        function confirmSubmit() {
            return confirm('Voulez-vous vraiment enregistrer cette modification ?');
            
        }
    </script>
    
    
</body>

</html>
