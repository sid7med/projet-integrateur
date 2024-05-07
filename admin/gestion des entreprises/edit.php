<?php

include "db_conn.php";

// Déclaration de la variable pour stocker le chemin du logo
$logo_path = "";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM `entreprise` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);  
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $Nom_enterprise = $row['Nom_enterprise'];
        $Adresse = $row['Adresse'];
        $Domaine_activite = $row['Domaine_activite'];
        $Email = $row['Email'];
        $Nom_profitionelle = $row['Nom_profitionelle'];
        $logo = $row['logo'];
        $logo_path = $logo; // Stocker le chemin du logo
    } else {
        header("Location: index.php?msg=Entreprise non trouvée");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nom_enterprise = $_POST['Nom_enterprise'];
    $Adresse = $_POST['Adresse'];
    $Domaine_activite = $_POST['Domaine_activite'];
    $Email = $_POST['Email'];
    $Nom_profitionelle = $_POST['Nom_profitionelle'];

    // Gestion du téléchargement du logo
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['logo']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file_name);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Vérifier si le fichier est une image réelle
        $check = getimagesize($_FILES["logo"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES['logo']['tmp_name'], $target_file)) {
                $logo_path = $target_file; // Mettre à jour le chemin du logo
            }
        } else {
            echo "Le fichier n'est pas une image valide.";
        }
    }

    // Mettre à jour la base de données avec le nouveau logo (s'il a été téléchargé)
    $sql = "UPDATE `entreprise` SET `Nom_enterprise`='$Nom_enterprise', `Adresse`='$Adresse', `Domaine_activite`='$Domaine_activite', `Email`='$Email', `Nom_profitionelle`='$Nom_profitionelle' ";
    
    // Vérifier s'il y a un nouveau logo à mettre à jour
    if (!empty($logo_path)) {
        $sql .= ", `logo`='$logo_path'";
    }

    $sql .= " WHERE `id`='$id'";
    $res_update = mysqli_query($conn, $sql);

    if ($res_update) {
        header("Location: index.php?msg=Enregistrement modifié avec succès");
        exit();
    } else {
        echo "Échec : " . mysqli_error($conn);
    }
}
ob_end_flush(); // Envoie la sortie de la mémoire tampon
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Modifier une entreprise</title>
</head>

<body>
    <div class="container">
        <h2>Modifier une entreprise</h2>
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return confirmSubmit();" style="width:50vw; min-width:300px;" class="m-auto">
            <div class="mb-3">
                <label for="Nom_enterprise" class="form-label">Nom de l'entreprise</label>
                <input type="text" class="form-control" id="Nom_enterprise" name="Nom_enterprise" value="<?php echo $Nom_enterprise; ?>">
            </div>
            <div class="mb-3">
                <label for="Adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="Adresse" name="Adresse" value="<?php echo $Adresse; ?>">
            </div>
            <div class="mb-3">
                <label for="Domaine_activite" class="form-label">Domaine d'activité</label>
                <input type="text" class="form-control" id="Domaine_activite" name="Domaine_activite" value="<?php echo $Domaine_activite; ?>">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" id="Email" name="Email" value="<?php echo $Email; ?>">
            </div>
            <div class="mb-3">
                <label for="Nom_profitionelle" class="form-label">Nom du professionnel</label>
                <input type="text" class="form-control" id="Nom_profitionelle" name="Nom_profitionelle" value="<?php echo $Nom_profitionelle; ?>">
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" id="logo" name="logo">
                <?php if (!empty($logo_path)) : ?>
                    <img src="<?php echo $logo_path; ?>" alt="Logo" style="max-width: 100px; max-height: 100px;">
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="index.php" class="btn btn-danger">Annuler</a>
        </form>
    </div>
    <!-- Inclusion de la bibliothèque JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        function confirmSubmit() {
            return confirm('Voulez-vous vraiment enregistrer cette modification ?');
        }
    </script>
</body>

</html>
