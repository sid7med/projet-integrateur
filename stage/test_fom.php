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
    $stmt = $conn->prepare("INSERT INTO internships (company_name, contact_email, contact_phone, address, internship_subject, field, description, duration, technologies, remuneration, deliverables, num_interns, applicant_comment, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssisss", $company_name, $contact_email, $contact_phone, $address, $internship_subject, $field, $description, $duration, $technologies, $remuneration, $deliverables, $num_interns, $applicant_comment, $comments);

    // Récupérer les valeurs du formulaire
    $company_name = $_POST['company_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-first-portfolio-style.css">
    <title>Fiche Description de Stage</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            margin-top: 50px;
        }
        .form-floating {
            margin-bottom: 20px;
        }
        .btn-primary {
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
    <div class="container">
        <div class="col-lg-8 col-12 mt-5 mt-lg-0 mx-auto">
            <form action="" method="POST" class="custom-form contact-form" role="form">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <h2 class="text-center">Fiche Description de Stage</h2>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Nom de l'entreprise" required="">
                            <label for="company_name">Nom de l'entreprise</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="email" name="contact_email" id="contact_email" class="form-control" placeholder="Email du contact" required="">
                            <label for="contact_email">Email du contact</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="tel" name="contact_phone" id="contact_phone" class="form-control" placeholder="Téléphone du contact" required="">
                            <label for="contact_phone">Téléphone du contact</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="address" id="address" class="form-control" placeholder="Adresse" required="">
                            <label for="address">Adresse</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="internship_subject" id="internship_subject" class="form-control" placeholder="Sujet de stage" required="">
                            <label for="internship_subject">Sujet de stage</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="field" id="field" class="form-control" placeholder="Domaine" required="">
                            <label for="field">Domaine</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="description" name="description" placeholder="Description" required=""></textarea>
                            <label for="description">Description</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="duration" id="duration" class="form-control" placeholder="Durée de stage" required="">
                            <label for="duration">Durée de stage</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="technologies" id="technologies" class="form-control" placeholder="Technologies utilisées" required="">
                            <label for="technologies">Technologies utilisées</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="remuneration" id="remuneration" class="form-control" placeholder="Possibilité de Rémunération" required="">
                            <label for="remuneration">Possibilité de Rémunération</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="deliverables" id="deliverables" class="form-control" placeholder
