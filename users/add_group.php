<?php
// Inclure la connexion à la base de données et démarrer la session
include "../db_conn.php";
session_start();

$id_lead = $_SESSION['id'];
$semester = $_SESSION['semester'];

// Fonction pour compter le nombre d'invitations envoyées par le lead
function countInvitations($conn, $id_lead) {
    $count_sql = "SELECT COUNT(*) AS count FROM dem WHERE id_lead = ?";
    $count_stmt = $conn->prepare($count_sql);
    $count_stmt->bind_param("i", $id_lead);
    $count_stmt->execute();
    $count_result = $count_stmt->get_result();
    $count_row = $count_result->fetch_assoc();
    return $count_row['count'];
}

// Vérifier si un formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && isset($_POST["id_etudiant"])) {
    $id_etudiant = intval($_POST["id_etudiant"]);
    $action = $_POST["action"];

    if ($action === "Inviter") {
        // Vérifier si le nombre d'invitations est inférieur à 4
        if (countInvitations($conn, $id_lead) < 4) {
            // Insérer la demande avec le semestre et l'ID du responsable
            $insert_sql = "INSERT INTO dem (id_etudiant, id_lead, dem, semester) VALUES (?, ?, 1, ?)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("iis", $id_etudiant, $id_lead, $semester);
            if ($insert_stmt->execute()) {
                echo "<script>window.location.href = 'add_group.php';</script>";
            } else {
                echo "<script>alert('Erreur lors de l\'insertion de l\'enregistrement dans la table dem: " . $conn->error . "');</script>";
            }
            $insert_stmt->close();
        } else {
            // Afficher un message d'erreur si le nombre d'invitations est atteint
            echo "<script>alert('Vous avez déjà envoyé le maximum de invitations permises.');</script>";
        }
    } else if ($action === "Annuler") {
        // Supprimer la demande
        $delete_sql = "DELETE FROM dem WHERE id_etudiant = ? AND id_lead = ?";
        $delete_stmt = $conn->prepare($delete_sql);
        $delete_stmt->bind_param("ii", $id_etudiant, $id_lead);
        if ($delete_stmt->execute()) {
            echo "<script>window.location.href = 'add_group.php';</script>";
        } else {
            echo "<script>alert('Erreur lors de la suppression de l\'enregistrement de la table dem: " . $conn->error . "');</script>";
        }
        $delete_stmt->close();
    }
}
?>

<?php
// Include the navigation bar (commented out in your code)
// include "../gestion des entreprises/nav.php";

  include "nav.php";
echo"<br><br><br><br><br><br>";
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">
  <style>
    .navbar-brand {
      color: var(--p-color);
    }
    .navbar .custom-btn {
      border-color: var(--secondary-color);
      color: var(--secondary-color);
    }
    .btn-primary {
      color: #fff;
      background-color: #14b789;
      border-color: #14b789;
    }
    .page-item.active .page-link {
      background-color: #14b789;
      border-color: #14b789;
    }
    table.dataTable thead>tr>th.dt-orderable-asc,
    table.dataTable thead>tr>th.dt-orderable-desc,
    table.dataTable thead>tr>td.dt-orderable-asc,
    table.dataTable thead>tr>td.dt-orderable-desc {
      background-color: #14b789;
    }
  </style>
  <title>SupNum Platform</title>
</head>

<body>

<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <table id="example" class="table table-hover text-center">
      <thead class="table">
        <tr>
          <th scope="col">Matricule</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Niveaux</th>
          <th scope="col">Semester</th>
          <th scope="col">demande</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT e.*, IF(d.id_lead IS NOT NULL, 1, 0) as demande
                FROM etudiant e
                LEFT JOIN dem d ON e.id = d.id_etudiant AND d.id_lead = ?
                WHERE e.semester = ? AND NOT EXISTS (SELECT 1 FROM membres_group WHERE id_etudiant = e.id)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param
        ("is", $id_lead, $semester);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
        <td><?php echo $row["matricule"] ?></td>
        <td><?php echo $row["nom"] ?></td>
        <td><?php echo $row["prenom"] ?></td>
        <td><?php echo $row["niveaux"] ?></td>
        <td><?php echo $row["semester"] ?></td>
        <td>
        <form action="" method="post" class="demande-form">
        <input type="hidden" name="id_etudiant" value="<?php echo htmlspecialchars($row["id"]); ?>">
        <?php if ($row["demande"] == 0): ?>
        <input type="submit" name="action" class="btn btn-success" value="Inviter">
        <?php else: ?>
        <input type="submit" name="action" class="btn btn-warning" value="Annuler">
        <?php endif; ?>
        </form>
        </td>
        </tr>
        <?php
             }
             $stmt->close();
             ?>
        </tbody>
        </table>
        
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
        <script src="js/jquery.js"></script>
        <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.js"></script>
        <script type="text/javascript">
            $('#example').DataTable({});
        </script>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">
                                <span class="copyright-text">Copyright © 2024 <a href="supnum.mr">SupNum</a> Institute. Tous droits réservés.</span>
                                Design:
                                <a rel="sponsored" href="https://templatemo.com" target="_blank"> Etudiants de Dr.Meya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/custom.js"></script>
        </body>
        </html>