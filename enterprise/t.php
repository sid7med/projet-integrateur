<?php
session_start();
include "../db_conn.php";

if (strlen($_SESSION['ent']==0)) {
  header('location: ../logout.php');
  } else{

?>


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; // Your MySQL username
    $password = ""; // Your MySQL password
    $dbname = "p_i"; // Your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO internships (company_name, contact, `address`, internship_subject, field, `description`, duration, technologies, remuneration, deliverables, num_interns, applicant_comment, comments)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssisss", $company_name, $contact, $address, $internship_subject, $field, $description, $duration, $technologies, $remuneration, $deliverables, $num_interns, $applicant_comment, $comments);

    // Retrieve form values
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

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<?php
include "nav.php";
echo"<br><br><br><br>";
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
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .button-6:hover {
            background-color: #0056b3;
        }
        .navbar-brand{
            color: black;
        }
        .navbar .custom-btn{
            border-color: var(--secondary-color);
    color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <?php
    //  include "nav.php";
     ?>
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
                    <!-- <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="email" name="contact_email" id="contact_email" class="form-control" placeholder="Email du contact" required="">
                            <label for="contact_email">Email du contact</label>
                        </div>
                    </div> -->
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="tel" name="contact" id="contact" class="form-control" placeholder="Téléphone du contact" required="">
                            <label for="contact">Téléphone du contact</label>
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
                            <input type="text" name="deliverables" id="deliverables" class="form-control" placeholder="Délivrables attendus" required="">
                            <label for="deliverables">Délivrables attendus</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="number" name="num_interns" id="num_interns" class="form-control" placeholder="Nombre de Stagiaires Recherchés" required="">
                            <label for="num_interns">Nombre de Stagiaires Recherchés</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <input type="text" name="applicant_comment" id="applicant_comment" class="form-control" placeholder="Commentaire Postulateur" required="">
                            <label for="applicant_comment">Commentaire Postulateur</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="comments" name="comments" placeholder="Commentaires" required=""></textarea>
                            <label for="comments">Commentaires</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="center">
                            <button type="submit" class="button-6">Soumettre</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
<?php }?>