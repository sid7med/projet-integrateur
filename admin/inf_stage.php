<?php
session_start();
include "../db_conn.php";

if (strlen($_SESSION['admin']==0)) {
  header('location: ../logout.php');
} else {

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Créer la connexion
    $conn = new mysqli("localhost", "root", "", "p_i");

    // Vérifier la connexion
    if ($conn->connect_error) {
      die("Échec de la connexion: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `internships` WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    } else {
      echo "Aucun enregistrement trouvé.";
      exit;
    }
  } else {
    echo "id invalide.";
    exit;
  }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <title>SupNum Plateforme - Information</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">
    <style> 
      div.services-thumb {
          background: var(--white-color);
          border: 2px solid green;
          border-radius: var(--border-radius-medium);
          position: relative;
          overflow: hidden;
          margin-bottom: 24px;
          padding: 40px 40px 40px 40px;
          transition: all 0.5s;
      }
      .services, .featured {
          background-color: #d6eed6;
      }
      .btn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 8px 8px;
          background-color: inherit;
          font-family: inherit;
          margin-left: 20px;
          position: relative; 
      }
      .btn-a {
          font-size: 40px;
          border: none;
          color: green;
          padding-left: 20px;
          font-family: initial;
          margin-left: 250px;
          position: relative;
      }
      .btn {
          transition: transform 0.3s ease-in-out; 
      }
      .btn {
          cursor: pointer;
      }
      .pi {
          padding-bottom: 35px;
          margin-right: 50px;
      }
      .details-container {
          display: block;
          margin-top: 20px;
      }
      .back-icon-container {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 20px;
      }
      .back-icon {
          font-size: 20px;
          color: #007bff; /* Couleur bleue par défaut */
          text-decoration: none;
          transition: color 0.3s, transform 0.3s;
          display: flex;
          align-items: center;
      }
      .back-icon i {
          margin-right: 8px;
      }
      .back-icon:hover {
          color: #0056b3; /* Couleur bleue foncée au survol */
          transform: translateX(-5px);
      }
    </style>
</head>

<body>
  <?php include "nav.php"; ?>
  
  <section class="about section-padding" id="section_2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="services-thumb">
            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
              <h3 class="mb-0"><?php echo $row["company_name"]; ?></h3>
            </div>
            <div class="details-container">
            <p><strong>contact:</strong> <?php echo $row["contact"]; ?></p>
            <p><strong>adresse:</strong> <?php echo $row["address"]; ?></p>
            <p><strong>syjet de stage:</strong> <?php echo $row["internship_subject"]; ?></p>
            <p><strong>Domaine:</strong> <?php echo $row["field"]; ?></p>
            <p><strong>Description:</strong> <?php echo $row["description"]; ?></p>
            <p><strong>durée de stage:</strong> <?php echo $row["duration"]; ?></p>
            <p><strong>technologie:</strong> <?php echo $row["technologies"]; ?></p>
            <p><strong>Possibilité de Rémunération:</strong> <?php echo $row["remuneration"]; ?></p>
            <p><strong>Délivrables attendus:</strong> <?php echo $row["deliverables"]; ?></p>
            <p><strong>Nombre de Stagiaires Recherchés:</strong> <?php echo $row["num_interns"]; ?></p>
            <p><strong>commentaire postulateur:</strong> <?php echo $row["applicant_comment"]; ?></p>
            <p><strong>commentaires:</strong> <?php echo $row["comments"]; ?></p>

            </div>
            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
              <i class="services-icon bi-lightbulb"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="back-icon-container">
      <a href="stage.php" class="back-icon"><i class="bi bi-arrow-return-left"></i>Retour à la page précédente</a>
    </div>
  </section>
  
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="copyright-text-wrap">
            <p class="mb-0">
              <span class="copyright-text">Copyright © 2024 <a href="supnum.mr">SupNum</a> Institut. Tous droits réservés.</span>
              Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">Étudiants de Dr.Meya</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/click-scroll.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>

