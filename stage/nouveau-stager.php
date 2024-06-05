<?php
include "nav.php";
echo "<br><br><br><br><br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; // Votre nom d'utilisateur MySQL
    $password = ""; // Votre mot de passe MySQL
    $dbname = "p_i"; // Le nom de votre base de données

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Préparer et lier
    $stmt = $conn->prepare("INSERT INTO internships (company_name, contact, address, internship_subject, field, description, duration, technologies, remuneration, deliverables, num_interns, applicant_comment, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssiss", $company_name, $contact, $address, $internship_subject, $field, $description, $duration, $technologies, $remuneration, $deliverables, $num_interns, $applicant_comment, $comments);

    // Récupérer les valeurs du formulaire
    $company_name = $_POST['company_name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $internship_subject = $_POST['internship_subject'];
    $field = $_POST['field'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $technologies = $_POST['technologies'];
    $remuneration = $_POST['remuneration'];
    $deliverables = $_POST['deliverables'];
    $num_interns = $_POST['num_interns'];
    $applicant_comment = $_POST['applicant_comment'];
    $comments = $_POST['comments'];

    // Exécuter la déclaration
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Fermer la déclaration et la connexion
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Description de Stage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .title {
            text-align: center;
        }
        input, textarea {
            border: none;
            width: 100%;
        }
        .center {
            display: flex;
            justify-content: center;
        }
        .button-6 {
            align-items: center;
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: .25rem;
            box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
            box-sizing: border-box;
            color: rgba(0, 0, 0, 0.85);
            cursor: pointer;
            display: inline-flex;
            font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 16px;
            font-weight: 600;
            justify-content: center;
            line-height: 1.25;
            margin: 0;
            min-height: 3rem;
            padding: calc(.875rem - 1px) calc(1.5rem - 1px);
            position: relative;
            text-decoration: none;
            transition: all 250ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            width: auto;
        }
        .button-6:hover,
        .button-6:focus {
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            color: rgba(0, 0, 0, 0.65);
        }
        .button-6:hover {
            transform: translateY(-1px);
        }
        .button-6:active {
            background-color: #F0F0F1;
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
            color: rgba(0, 0, 0, 0.65);
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr class="title">
                <td colspan="2">Fiche Description de Stage</td>
            </tr>
            <tr>
                <td>Nom de l'entreprise :</td>
                <td><input type="text" name="company_name" required></td>
            </tr>
            <tr>
                <td>Contact :</td>
                <td>
                    <input type="email" name="contact" required>
                    <input type="number" name="contact" required></
                </td>
            </tr>
            <tr>
                <td>Adresse :</td>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <td>Sujet de stage :</td>
                <td><input type="text" name="internship_subject" required></td>
            </tr>
            <tr>
                <td>Domaine :</td>
                <td><input type="text" name="field" required></td>
            </tr>
            <tr>
                <td>Description :</td>
                <td><input type="text" name="description" required></td>
            </tr>
            <tr>
                <td>Durée de stage :</td>
                <td><input type="text" name="duration" required></td>
            </tr>
            <tr>
                <td>Technologies utilisées :</td>
                <td><input type="text" name="technologies" required></td>
            </tr>
            <tr>
                <td>Possibilité de Rémunération :</td>
                <td><input type="text" name="remuneration" required></td>
            </tr>
            <tr>
                <td>Délivrables attendus :</td>
                <td><input type="text" name="deliverables" required></td>
            </tr>
            <tr>
                <td>Nombre de Stagiaires Recherchés :</td>
                <td><input type="number" name="num_interns" required></td>
            </tr>
            <tr>
                <td>Commentaire Postulateur :</td>
                <td><input type="text" name="applicant_comment" required></td>
            </tr>
            <tr>
                <td>Commentaires :</td>
                <td><textarea name="comments" required></textarea></td>
            </tr>
        </table>
        <div class="center">
            <button type="submit" class="button-6">Soumettre</button>
        </div>
    </form>
</body>
</html>
