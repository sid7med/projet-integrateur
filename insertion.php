<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p_i";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adress"]; 
    $tel = $_POST["tel"];
    $libelle = $_POST["libelle"];

    
    $sql = "INSERT INTO utilisateur (Nom, Prenom, Adresse, Tel, Libelle) VALUES ('$nom', '$prenom', '$adresse', '$tel', '$libelle')";
    
    
    if ($conn->query($sql) === TRUE) {
        echo "  et Insertion valide";
    } else {
        echo " Insertion échouée : " ;
    }
}


$conn->close();
?>
