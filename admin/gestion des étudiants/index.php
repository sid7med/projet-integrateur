<?php
include "../gestion des entreprises/nav.php";
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

  <title>PHP CRUD Application</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>SupNum Plateform</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/magnific-popup.css" rel="stylesheet">

    <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">
<style>
  .navbar-brand{
    color:  var(--p-color);
  }
  .navbar .custom-btn {
    border-color: var(--secondary-color);
    color: var(--secondary-color);
}
.btn-primary {
    color: #fff;
    background-color:#14b789;
    border-color:#14b789;
}
table.dataTable thead>tr>th.dt-orderable-asc, table.dataTable thead>tr>th.dt-orderable-desc, table.dataTable thead>tr>td.dt-orderable-asc, table.dataTable thead>tr>td.dt-orderable-desc {
  background-color:#14b789 ;
}
.page-item.active .page-link {
  background-color:#14b789;
  border-color: #14b789;

}

</style>
</head>

<body>

<?php
include "db_conn.php";
?>

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
    <a href="add-new.php" class="btn btn-primary mb-3">Ajouter un nouveau</a>

    <table id="example" class="table table-hover text-center">
      <thead class="table">
        <tr>
          <th scope="col">Matricule</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Niveaux</th>
          <th scope="col">Semester</th>
          <th scope="col">Leader</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `etudiant`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

          <tr>
            <td><?php echo $row["matricule"] ?></td>
            <td><?php echo $row["nom"] ?></td>
            <td><?php echo $row["prenom"] ?></td>
            <td><?php echo $row["niveaux"] ?></td>
            <td><?php echo $row["semester"] ?></td>
            <td>
              <form action="" method="post" class="lead-form">
                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                <?php if ($row["lead"] == 0): ?>
                  <input type="submit" name="action" class="btn btn-success" value="ajouter">
                <?php else: ?>
                  <input type="submit" name="action" class="btn btn-warning" value="annuler">
                <?php endif; ?>
              </form>
            </td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <!-- Bouton de suppression avec modal -->
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal_<?php echo $row["id"] ?>">
                <i class="fa-solid fa-trash fs-5"></i>
              </button>

              <!-- Modal de confirmation de suppression -->
              <div class="modal fade" id="deleteModal_<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Êtes-vous sûr de vouloir supprimer cet étudiant ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Supprimer</a>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && isset($_POST["id"])) {
    $id = $_POST["id"];
    $new_lead_status = ($_POST["action"] === "ajouter") ? 1 : 0;
    $sql = "UPDATE `etudiant` SET `lead` = $new_lead_status WHERE `id` = $id";
    mysqli_query($conn, $sql);
    ob_start();
    // Check if headers have already been sent
    if (!headers_sent()) {
        header("Location:index.php");
    } else {
        echo "<script>window.location.href = 'index.php';</script>";
    }
    ob_end_flush();
    exit;

}
?>

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
                        <span class="copyright-text">Copyright © 2024 <a href="supnum.mr">SupNum</a> Institue. Tous droits réservés.</span>
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
