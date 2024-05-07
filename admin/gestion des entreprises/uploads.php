<?php
// Vérifier si un fichier a été téléchargé
if (isset($_FILES['logo'])) {
    $file_name = $_FILES['logo']['name']; // Nom du fichier
    $file_tmp = $_FILES['logo']['tmp_name']; // Emplacement temporaire du fichier
    $file_size = $_FILES['logo']['size']; // Taille du fichier
    $file_type = $_FILES['logo']['type']; // Type du fichier

    // Emplacement de destination pour stocker le fichier
    $target_dir = "uploads/";
    $target_file = $target_dir . $file_name;

    // Vérifier le type de fichier (exemple: autoriser uniquement les images)
    $allowed_types = array('image/jpeg', 'image/png', 'image/gif');
    if (in_array($file_type, $allowed_types)) {
        // Déplacer le fichier téléchargé vers le dossier cible
        if (move_uploaded_file($file_tmp, $target_file)) {
            echo "Le fichier $file_name a été téléchargé avec succès.";
        } else {
            echo "Erreur lors du téléchargement du fichier.";
        }
    } else {
        echo "Le type de fichier n'est pas autorisé.";
    }
}
?>
